<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class RemoveVmFromDataGuardRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DataGuardId" => null,
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
        if (array_key_exists("DataGuardId",$param) and $param["DataGuardId"] !== null) {
            if(is_bool($param["DataGuardId"])){
                $this->RequestParams["DataGuardId"] = $param["DataGuardId"] ? "true" : "false";
            } else {
                $this->RequestParams["DataGuardId"] = $param["DataGuardId"];
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