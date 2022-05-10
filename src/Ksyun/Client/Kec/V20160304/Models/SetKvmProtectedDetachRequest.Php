<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class SetKvmProtectedDetachRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "ScalingGroupId" => null,
         /**String**/
        "ScalingInstanceId" => null,
         /**Int**/
        "ProtectedFromDetach" => null,
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
        if (array_key_exists("ScalingInstanceId",$param) and $param["ScalingInstanceId"] !== null) {
            if(is_bool($param["ScalingInstanceId"])){
                $this->RequestParams["ScalingInstanceId"] = $param["ScalingInstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingInstanceId"] = $param["ScalingInstanceId"];
            }
        }
        if (array_key_exists("ProtectedFromDetach",$param) and $param["ProtectedFromDetach"] !== null) {
            if(is_bool($param["ProtectedFromDetach"])){
                $this->RequestParams["ProtectedFromDetach"] = $param["ProtectedFromDetach"] ? "true" : "false";
            } else {
                $this->RequestParams["ProtectedFromDetach"] = $param["ProtectedFromDetach"];
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