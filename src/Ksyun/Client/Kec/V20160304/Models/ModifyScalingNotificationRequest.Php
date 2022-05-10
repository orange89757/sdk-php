<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyScalingNotificationRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ScalingNotificationId" => null,
         /**String**/
        "AvailabilityZone" => null,
         /**Int**/
        "NotificationType" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ScalingNotificationId",$param) and $param["ScalingNotificationId"] !== null) {
            if(is_bool($param["ScalingNotificationId"])){
                $this->RequestParams["ScalingNotificationId"] = $param["ScalingNotificationId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingNotificationId"] = $param["ScalingNotificationId"];
            }
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("NotificationType",$param) and $param["NotificationType"] !== null) {
            if(is_bool($param["NotificationType"])){
                $this->RequestParams["NotificationType"] = $param["NotificationType"] ? "true" : "false";
            } else {
                $this->RequestParams["NotificationType"] = $param["NotificationType"];
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