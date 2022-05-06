<?php

namespace Ksyun\Client\Aaaaaa111_333_2\V20211212;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class Aaaaaa111_333_2Client extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "typ-0918-test_1.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "typ-0918-test_1";

    /**
     * @var string
     */
    protected $version = "2021-12-12";

    /**
     * @param Credential $credential
     * @param string $region
     * @param HttpOptions|null $profile
     * @throws KsyunSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "Ksyun\Client"."\\".ucfirst("aaaaaa111_333_2")."\\"."V20211212\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
