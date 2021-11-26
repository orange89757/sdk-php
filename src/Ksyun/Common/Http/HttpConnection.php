<?php

namespace Ksyun\Common\Http;

use GuzzleHttp\Client;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Exception\KsyunSDKException;

/**
 * http连接类
 * @package App\Ksyun\Common\http
 */
class HttpConnection
{
    private $client;
    private $profile;

    /**
     * @param string $url url
     * @param HttpOptions $profile
     */
    function __construct($url, $profile)
    {
        $this->client = new Client(["base_uri" => $url]);
        $this->profile = $profile;
    }

    private  function getOptions()
    {
        $options = ["allow_redirects" => false];
        $options["timeout"] = $this->profile->getReqTimeout();
        $options["proxy"] = $this->profile->getProxy();
        return $options;
    }

    public function getRequest($uri = '', $query = [], $headers = [])
    {
        $options = $this->getOptions();

        if ($query) {
            $options["query"] = $query;
        }
        if ($headers) {
            $options["headers"] = $headers;
        }
        return $this->client->request('GET',$uri, $options);
    }

    public function postRequest($uri = '', $headers = [], $body = '')
    {
        $options = $this->getOptions();
        if ($headers) {
            $options["headers"] = $headers;
        }
        $contentType = $this->profile->getHeaderContentType();
        if ($contentType == HttpOptions::$CONTENT_TYPE_FORM) {
            if ($body) {
                $options["form_params"] = $body;
            }
        } elseif ($contentType == HttpOptions::$CONTENT_TYPE_jSON) {
            if ($body) {
                $options["json"] = $body;
            }
        } else {
            throw new KsyunSDKException("", "content_type only support (application/x-www-form-urlencoded,application/json)");

        }
        return $this->client->request('POST',$uri, $options);
    }

}

