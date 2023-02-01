<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreatePolicyVersionRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "Type" => null,
         /**String**/
        "Version" => null,
         /**String**/
        "PolicyKrn" => null,
         /**String**/
        "PolicyDocument" => null,
         /**String**/
        "SetAsDefault" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            if(is_bool($param["Type"])){
                $this->RequestParams["Type"] = $param["Type"] ? "true" : "false";
            } else {
                $this->RequestParams["Type"] = $param["Type"];
            }
        }
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            if(is_bool($param["Version"])){
                $this->RequestParams["Version"] = $param["Version"] ? "true" : "false";
            } else {
                $this->RequestParams["Version"] = $param["Version"];
            }
        }
        if (array_key_exists("PolicyKrn",$param) and $param["PolicyKrn"] !== null) {
            if(is_bool($param["PolicyKrn"])){
                $this->RequestParams["PolicyKrn"] = $param["PolicyKrn"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyKrn"] = $param["PolicyKrn"];
            }
        }
        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            if(is_bool($param["PolicyDocument"])){
                $this->RequestParams["PolicyDocument"] = $param["PolicyDocument"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyDocument"] = $param["PolicyDocument"];
            }
        }
        if (array_key_exists("SetAsDefault",$param) and $param["SetAsDefault"] !== null) {
            if(is_bool($param["SetAsDefault"])){
                $this->RequestParams["SetAsDefault"] = $param["SetAsDefault"] ? "true" : "false";
            } else {
                $this->RequestParams["SetAsDefault"] = $param["SetAsDefault"];
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