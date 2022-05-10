<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyScalingGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "ScalingGroupId" => null,
         /**String**/
        "ScalingGroupName" => null,
         /**Int**/
        "MinSize" => null,
         /**Int**/
        "MaxSize" => null,
         /**String**/
        "RemovePolicy" => null,
         /**String**/
        "ScalingConfigurationVmId" => null,
         /**Int**/
        "DesiredCapacity" => null,
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
        if (array_key_exists("ScalingGroupName",$param) and $param["ScalingGroupName"] !== null) {
            if(is_bool($param["ScalingGroupName"])){
                $this->RequestParams["ScalingGroupName"] = $param["ScalingGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingGroupName"] = $param["ScalingGroupName"];
            }
        }
        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            if(is_bool($param["MinSize"])){
                $this->RequestParams["MinSize"] = $param["MinSize"] ? "true" : "false";
            } else {
                $this->RequestParams["MinSize"] = $param["MinSize"];
            }
        }
        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            if(is_bool($param["MaxSize"])){
                $this->RequestParams["MaxSize"] = $param["MaxSize"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxSize"] = $param["MaxSize"];
            }
        }
        if (array_key_exists("RemovePolicy",$param) and $param["RemovePolicy"] !== null) {
            if(is_bool($param["RemovePolicy"])){
                $this->RequestParams["RemovePolicy"] = $param["RemovePolicy"] ? "true" : "false";
            } else {
                $this->RequestParams["RemovePolicy"] = $param["RemovePolicy"];
            }
        }
        if (array_key_exists("ScalingConfigurationVmId",$param) and $param["ScalingConfigurationVmId"] !== null) {
            if(is_bool($param["ScalingConfigurationVmId"])){
                $this->RequestParams["ScalingConfigurationVmId"] = $param["ScalingConfigurationVmId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingConfigurationVmId"] = $param["ScalingConfigurationVmId"];
            }
        }
        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            if(is_bool($param["DesiredCapacity"])){
                $this->RequestParams["DesiredCapacity"] = $param["DesiredCapacity"] ? "true" : "false";
            } else {
                $this->RequestParams["DesiredCapacity"] = $param["DesiredCapacity"];
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