<?php

namespace Ksyun\Client\Eip3\V20161018;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class Eip3Client extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "eip3.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "eip3";

    /**
     * @var string
     */
    protected $version = "2016-10-18";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("eip3")."\\"."V20161018\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
