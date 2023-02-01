<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListEntitiesForPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PolicyKrn" => null,
         /**Int**/
        "MaxItems" => null,
         /**String**/
        "Marker" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PolicyKrn",$param) and $param["PolicyKrn"] !== null) {
            if(is_bool($param["PolicyKrn"])){
                $this->RequestParams["PolicyKrn"] = $param["PolicyKrn"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyKrn"] = $param["PolicyKrn"];
            }
        }
        if (array_key_exists("MaxItems",$param) and $param["MaxItems"] !== null) {
            if(is_bool($param["MaxItems"])){
                $this->RequestParams["MaxItems"] = $param["MaxItems"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxItems"] = $param["MaxItems"];
            }
        }
        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            if(is_bool($param["Marker"])){
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
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