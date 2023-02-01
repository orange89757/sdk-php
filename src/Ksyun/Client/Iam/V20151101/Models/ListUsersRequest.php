<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListUsersRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Marker" => null,
         /**Int**/
        "MaxItems" => null,
         /**String**/
        "AccessKey" => null,
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
        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            if(is_bool($param["AccessKey"])){
                $this->RequestParams["AccessKey"] = $param["AccessKey"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessKey"] = $param["AccessKey"];
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