<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListPoliciesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Action" => null,
         /**String**/
        "Version" => null,
         /**String**/
        "Marker" => null,
         /**String**/
        "MaxItems" => null,
         /**Int**/
        "OnlyAttached" => null,
         /**String**/
        "Scope" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            if(is_bool($param["Action"])){
                $this->RequestParams["Action"] = $param["Action"] ? "true" : "false";
            } else {
                $this->RequestParams["Action"] = $param["Action"];
            }
        }
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            if(is_bool($param["Version"])){
                $this->RequestParams["Version"] = $param["Version"] ? "true" : "false";
            } else {
                $this->RequestParams["Version"] = $param["Version"];
            }
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
        if (array_key_exists("OnlyAttached",$param) and $param["OnlyAttached"] !== null) {
            if(is_bool($param["OnlyAttached"])){
                $this->RequestParams["OnlyAttached"] = $param["OnlyAttached"] ? "true" : "false";
            } else {
                $this->RequestParams["OnlyAttached"] = $param["OnlyAttached"];
            }
        }
        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            if(is_bool($param["Scope"])){
                $this->RequestParams["Scope"] = $param["Scope"] ? "true" : "false";
            } else {
                $this->RequestParams["Scope"] = $param["Scope"];
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