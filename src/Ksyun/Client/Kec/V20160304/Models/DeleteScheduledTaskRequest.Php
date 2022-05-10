<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteScheduledTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ScalingScheduledTaskId" => null,
         /**String**/
        "ScalingGroupId" => null,
         /**String**/
        "AvailabilityZone" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ScalingScheduledTaskId",$param) and $param["ScalingScheduledTaskId"] !== null) {
            if(is_bool($param["ScalingScheduledTaskId"])){
                $this->RequestParams["ScalingScheduledTaskId"] = $param["ScalingScheduledTaskId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingScheduledTaskId"] = $param["ScalingScheduledTaskId"];
            }
        }
        if (array_key_exists("ScalingGroupId",$param) and $param["ScalingGroupId"] !== null) {
            if(is_bool($param["ScalingGroupId"])){
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"];
            }
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
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