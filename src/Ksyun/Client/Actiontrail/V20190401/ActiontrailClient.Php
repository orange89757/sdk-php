<?php

namespace Ksyun\Client\Actiontrail\V20190401;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class ActiontrailClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "actiontrail.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "actiontrail";

    /**
     * @var string
     */
    protected $version = "2019-04-01";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("actiontrail")."\\"."V20190401\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
