<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyDataGuardGroupsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DataGuardId" => null,
         /**String**/
        "DataGuardName" => null,
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
        if (array_key_exists("DataGuardName",$param) and $param["DataGuardName"] !== null) {
            if(is_bool($param["DataGuardName"])){
                $this->RequestParams["DataGuardName"] = $param["DataGuardName"] ? "true" : "false";
            } else {
                $this->RequestParams["DataGuardName"] = $param["DataGuardName"];
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