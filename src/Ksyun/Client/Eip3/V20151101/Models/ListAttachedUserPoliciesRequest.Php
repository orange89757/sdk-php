<?php
namespace  Ksyun\Client\Eip3\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListAttachedUserPoliciesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Marker" => null,
         /**String**/
        "MaxItems" => null,
         /**String**/
        "UserName" => null,
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            if(is_bool($param["UserName"])){
                $this->RequestParams["UserName"] = $param["UserName"] ? "true" : "false";
            } else {
                $this->RequestParams["UserName"] = $param["UserName"];
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