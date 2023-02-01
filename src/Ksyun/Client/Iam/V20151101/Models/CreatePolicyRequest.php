<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreatePolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PolicyName" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "PolicyDocument" => null,
         /**String**/
        "PolicyStruct" => null,
         /**String**/
        "CreateMode" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            if(is_bool($param["PolicyName"])){
                $this->RequestParams["PolicyName"] = $param["PolicyName"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyName"] = $param["PolicyName"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            if(is_bool($param["PolicyDocument"])){
                $this->RequestParams["PolicyDocument"] = $param["PolicyDocument"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyDocument"] = $param["PolicyDocument"];
            }
        }
        if (array_key_exists("PolicyStruct",$param) and $param["PolicyStruct"] !== null) {
            if(is_bool($param["PolicyStruct"])){
                $this->RequestParams["PolicyStruct"] = $param["PolicyStruct"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyStruct"] = $param["PolicyStruct"];
            }
        }
        if (array_key_exists("CreateMode",$param) and $param["CreateMode"] !== null) {
            if(is_bool($param["CreateMode"])){
                $this->RequestParams["CreateMode"] = $param["CreateMode"] ? "true" : "false";
            } else {
                $this->RequestParams["CreateMode"] = $param["CreateMode"];
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