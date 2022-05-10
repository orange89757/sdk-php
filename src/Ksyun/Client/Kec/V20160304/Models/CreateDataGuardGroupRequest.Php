<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateDataGuardGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DataGuardName" => null,
         /**String**/
        "Level" => null,
         /**Int**/
        "SameHostNum" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DataGuardName",$param) and $param["DataGuardName"] !== null) {
            if(is_bool($param["DataGuardName"])){
                $this->RequestParams["DataGuardName"] = $param["DataGuardName"] ? "true" : "false";
            } else {
                $this->RequestParams["DataGuardName"] = $param["DataGuardName"];
            }
        }
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            if(is_bool($param["Level"])){
                $this->RequestParams["Level"] = $param["Level"] ? "true" : "false";
            } else {
                $this->RequestParams["Level"] = $param["Level"];
            }
        }
        if (array_key_exists("SameHostNum",$param) and $param["SameHostNum"] !== null) {
            if(is_bool($param["SameHostNum"])){
                $this->RequestParams["SameHostNum"] = $param["SameHostNum"] ? "true" : "false";
            } else {
                $this->RequestParams["SameHostNum"] = $param["SameHostNum"];
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