<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListRolesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Marker" => null,
         /**Int**/
        "MaxItems" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            if(is_bool($param["Marker"])){
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("MaxItems",$param) and $param["MaxItems"] !== null) {
            if(is_bool($param["MaxItems"])){
                $this->RequestParams["MaxItems"] = $param["MaxItems"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxItems"] = $param["MaxItems"];
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