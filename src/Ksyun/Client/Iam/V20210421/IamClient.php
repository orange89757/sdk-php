<?php

namespace Ksyun\Client\Iam\V20210421;

use Ksyun\Common\BaseClient;
use Ksyun\Common\Http\HttpOptions;
use Ksyun\Common\Credential;



class IamClient extends BaseClient
{
    /**
     * @var string
     */
    protected $endpoint = "iam.api.ksyun.com";

    /**
     * @var string
     */
    protected $service = "iam";

    /**
     * @var string
     */
    protected $version = "2021-04-21";

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
        $respClass = "Ksyun\Client"."\\".ucfirst("iam")."\\"."V20210421\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->unserialize($response);
        return $obj;
    }
}
