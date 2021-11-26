<?php

namespace Ksyun\Common;

use \ReflectionClass;

use Ksyun\Common\Http\HttpConnection;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Exception\KsyunSDKException;


/**
 * 抽象api类，禁止client引用
 * @package App\Ksyun\Common
 */
abstract class BaseClient
{
    /**
     * @var string SDK版本
     */
    public static $SDK_VERSION = "SDK_PHP_1.0";

    /**
     * @var integer http响应码200
     */
    public static $HTTP_RSP_OK = 200;

    /**
     * @var Credential 认证类
     */
    private $credential;

    /**
     * @var HttpOptions 会话配置信息类
     */
    private $profile;

    /**
     * @var string 产品地域
     */
    private $region;

    /**
     * @var string 请求路径
     */
    private $path;

    /**
     * @var string api版本号
     */
    private $apiVersion;

    /**
     * @var HttpConnection
     */
    private $httpConn;

    /**
     * 基础client类
     * @param string $endpoint Deprecated, we use service+rootdomain instead
     * @param string $version api版本
     * @param Credential $credential 认证信息实例
     * @param string $region 产品地域
     * @param HttpOptions $profile
     */
    function __construct($endpoint, $version, $credential, $region, $profile=null)
    {
        $this->path = "/";
        $this->credential = $credential;
        $this->region = $region;
        if ($profile) {
            $this->profile = $profile;
        } else {
            $this->profile = new HttpOptions();
        }

        $this->getRefreshedEndpoint();

        $this->sdkVersion = BaseClient::$SDK_VERSION;
        $this->apiVersion = $version;

        $this->httpConn = $this->createConnect();
    }

    /**
     * 设置产品地域
     * @param string $region 地域
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * 获取产品地域
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * 设置认证信息实例
     * @param Credential $credential 认证信息实例
     */
    public function setCredential($credential)
    {
        $this->credential = $credential;
    }

    /**
     * 返回认证信息实例
     * @return Credential
     */
    public function getCredential()
    {
        return $this->credential;
    }

    /**
     * 设置配置实例
     * @param HttpOptions $profile 配置实例
     */
    public function setHttpOptions($profile)
    {
        $this->profile = $profile;
    }

    /**
     * 返回配置实例
     * @return HttpOptions
     */
    public function getHttpOptions()
    {
        return $this->profile;
    }

    /**
     * @param string $action  方法名
     * @param array $request  参数列表
     * @return mixed
     * @throws KsyunSDKException
     */
    public function __call($action, $request)
    {
        return $this->doRequestWithOptions($action, $request[0], array());
    }

    protected function doRequestWithOptions($action, $request, $options)
    {
        try {
            $responseData = null;
            $serializeRequest = $request->requestObjSerialize($request);

            switch ($this->credential->getSignMethod()) {
                case 'HMAC-SHA256':
                    $responseData = $this->doRequest($action, $serializeRequest);
                    break;
                default:
                    throw new KsyunSDKException("ClientError", "Invalid sign method");
                    break;
            }
            if ($responseData->getStatusCode() !== BaseClient::$HTTP_RSP_OK) {
                throw new KsyunSDKException($responseData->getReasonPhrase(), $responseData->getBody());
            }
            $tmpResp = json_decode($responseData->getBody(), true);
//            if (array_key_exists("Error", $tmpResp)) {
//                throw new KsyunSDKException($tmpResp["Error"]["Code"], $tmpResp["Error"]["Message"], $tmpResp["RequestId"]);
//            }

            return $this->returnResponse($action, $tmpResp);
        } catch (\Exception $e) {
            if (!($e instanceof KsyunSDKException)) {
                throw new KsyunSDKException("", $e->getMessage());
            } else {
                throw $e;
            }
        }
    }

    private function doRequest($action, $request)
    {
        switch ($this->profile->getReqMethod()) {
            case HttpOptions::$REQ_GET:
                return $this->getRequest($action, $request);
                break;
            case HttpOptions::$REQ_POST:
                return $this->postRequest($action, $request);
                break;
            default:
                throw new KsyunSDKException("", "Method only support (GET, POST)");
                break;
        }
    }

    /**
     * @throws KsyunSDKException
     */
    private function getRequest($action, $request)
    {
        $query = $this->formatRequestData($action, $request);
        $connect = $this->getConnect();
        $headers = [
            'Accept' => 'application/json',
        ];
        $res =  $connect->getRequest($this->path, $query, $headers);

        return $res;
    }

    /**
     * @throws KsyunSDKException
     */
    private function postRequest($action, $request)
    {
        $body = $this->formatRequestData($action, $request);
        $connect = $this->getConnect();
        $headers = [
            'Accept' => 'application/json',
        ];
        return $connect->postRequest($this->path, $headers, $body);
    }

    /**
     * @throws KsyunSDKException
     */
    private function formatRequestData($action, $request)
    {
        $param = [
            'Version' => $this->apiVersion,
            'Action' => $action,
            'Timestamp' => gmdate("Y-m-d\TH:i:s\Z"),
            'SignatureVersion' => '1.0',
            'Service' => $this->service,
        ];
        $param = array_merge($param,$request);

        if ($this->credential->getSecretId()) {
            $param["Accesskey"] = $this->credential->getSecretId();
        }

        if ($this->region) {
            $param["Region"] = $this->region;
        }

        if ($this->credential->getSignMethod()) {
            $param["SignatureMethod"] = $this->credential->getSignMethod();
        }

        $signStr = $this->formatSignString($param);
        $param["Signature"] = Sign::sign($this->credential->getSecretKey(), $signStr, $this->credential->getSignMethod());
        return $param;
    }

    private function createConnect()
    {
        $prot = $this->profile->getProtocol();
        return new HttpConnection($prot.$this->getRefreshedEndpoint(), $this->profile);
    }

    private function getConnect() {
        $keepAlive = $this->profile->getKeepAlive();
        if (true === $keepAlive) {
            return $this->httpConn;
        } else {
            return $this->createConnect();
        }
    }

    private function formatSignString( $param)
    {
        $tmpParam = [];
        ksort($param,SORT_STRING);
        foreach ($param as $key => $value) {
            array_push($tmpParam, rawurlencode($key) . "=" . rawurlencode($value));
        }
        $signStr = join ("&", $tmpParam);
        return $signStr;
    }


    private function getRefreshedEndpoint() {
        $this->endpoint = $this->profile->getEndpoint();
        if ($this->endpoint === null) {
            $this->endpoint = $this->service.".".$this->profile->getRootDomain();
        }
        return $this->endpoint;
    }
}
