<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeScalingGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "ScalingGroupName" => null,
         /**String**/
        "ScalingConfigurationVmId" => null,
         /**String**/
        "ScalingGroupId" => null,
         /**String**/
        "VpcId" => null,
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
        if (array_key_exists("ScalingGroupName",$param) and $param["ScalingGroupName"] !== null) {
            if(is_bool($param["ScalingGroupName"])){
                $this->RequestParams["ScalingGroupName"] = $param["ScalingGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingGroupName"] = $param["ScalingGroupName"];
            }
        }
        if (array_key_exists("ScalingConfigurationVmId",$param) and $param["ScalingConfigurationVmId"] !== null) {
            if(is_bool($param["ScalingConfigurationVmId"])){
                $this->RequestParams["ScalingConfigurationVmId"] = $param["ScalingConfigurationVmId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingConfigurationVmId"] = $param["ScalingConfigurationVmId"];
            }
        }
        if (array_key_exists("ScalingGroupId",$param) and $param["ScalingGroupId"] !== null) {
            if(is_bool($param["ScalingGroupId"])){
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"];
            }
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
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