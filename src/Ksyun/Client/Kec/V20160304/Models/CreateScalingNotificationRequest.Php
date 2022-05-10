<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateScalingNotificationRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ScalingGroupId" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "UserId" => null,
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
        if (array_key_exists("ScalingGroupId",$param) and $param["ScalingGroupId"] !== null) {
            if(is_bool($param["ScalingGroupId"])){
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            if(is_bool($param["UserId"])){
                $this->RequestParams["UserId"] = $param["UserId"] ? "true" : "false";
            } else {
                $this->RequestParams["UserId"] = $param["UserId"];
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