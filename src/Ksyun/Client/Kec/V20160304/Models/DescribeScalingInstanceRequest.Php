<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeScalingInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "ScalingGroupId" => null,
         /**String**/
        "CreationType" => null,
         /**String**/
        "HealthStatus" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("ScalingGroupId",$param) and $param["ScalingGroupId"] !== null) {
            if(is_bool($param["ScalingGroupId"])){
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"];
            }
        }
        if (array_key_exists("CreationType",$param) and $param["CreationType"] !== null) {
            if(is_bool($param["CreationType"])){
                $this->RequestParams["CreationType"] = $param["CreationType"] ? "true" : "false";
            } else {
                $this->RequestParams["CreationType"] = $param["CreationType"];
            }
        }
        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            if(is_bool($param["HealthStatus"])){
                $this->RequestParams["HealthStatus"] = $param["HealthStatus"] ? "true" : "false";
            } else {
                $this->RequestParams["HealthStatus"] = $param["HealthStatus"];
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