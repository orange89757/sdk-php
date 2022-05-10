<?php

namespace Ksyun\Client\Rg\V20151101;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class RgClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "rg.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "rg";

    /**
     * @var string
     */
    protected $version = "2015-11-01";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("rg")."\\"."V20151101\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
