<?php

namespace Ksyun\Client\Rg\V20170822;

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
    protected $version = "2017-08-22";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("rg")."\\"."V20170822\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
