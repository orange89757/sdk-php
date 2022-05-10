<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateScalingGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AvailabilityZone" => null,
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
         /**String**/
        "VpcId" => null,
         /**String**/
        "SlbId" => null,
         /**String**/
        "SecurityGroupId" => null,
         /**String**/
        "ListenerId" => null,
         /**String**/
        "SubnetId" => null,
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("SlbId",$param) and $param["SlbId"] !== null) {
            if(is_bool($param["SlbId"])){
                $this->RequestParams["SlbId"] = $param["SlbId"] ? "true" : "false";
            } else {
                $this->RequestParams["SlbId"] = $param["SlbId"];
            }
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            if(is_bool($param["ListenerId"])){
                $this->RequestParams["ListenerId"] = $param["ListenerId"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerId"] = $param["ListenerId"];
            }
        }
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            if(is_bool($param["SubnetId"])){
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
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