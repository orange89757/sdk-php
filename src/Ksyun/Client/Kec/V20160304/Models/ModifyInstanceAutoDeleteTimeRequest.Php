<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyInstanceAutoDeleteTimeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AutoDeleteTime" => null,
         /**String**/
        "InstanceId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AutoDeleteTime",$param) and $param["AutoDeleteTime"] !== null) {
            if(is_bool($param["AutoDeleteTime"])){
                $this->RequestParams["AutoDeleteTime"] = $param["AutoDeleteTime"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoDeleteTime"] = $param["AutoDeleteTime"];
            }
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
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