<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyScalingConfigurationRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ScalingConfigurationId" => null,
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "ScalingConfigurationName" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ScalingConfigurationId",$param) and $param["ScalingConfigurationId"] !== null) {
            if(is_bool($param["ScalingConfigurationId"])){
                $this->RequestParams["ScalingConfigurationId"] = $param["ScalingConfigurationId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingConfigurationId"] = $param["ScalingConfigurationId"];
            }
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("ScalingConfigurationName",$param) and $param["ScalingConfigurationName"] !== null) {
            if(is_bool($param["ScalingConfigurationName"])){
                $this->RequestParams["ScalingConfigurationName"] = $param["ScalingConfigurationName"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingConfigurationName"] = $param["ScalingConfigurationName"];
            }
        }

    }

    private function _unserialize($name,$params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value){
            $this->$name[$key] = $value;
        }

    }
}