<?php

namespace Ksyun\Client\Resourcemanager\V20210320;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class ResourcemanagerClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "resourcemanager.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "resourcemanager";

    /**
     * @var string
     */
    protected $version = "2021-03-20";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("resourcemanager")."\\"."V20210320\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
