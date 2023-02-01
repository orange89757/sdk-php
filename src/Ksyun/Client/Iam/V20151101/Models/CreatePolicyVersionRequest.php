<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreatePolicyVersionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PolicyKrn" => null,
         /**String**/
        "PolicyDocument" => null,
         /**String**/
        "SetAsDefault" => null,
         /**String**/
        "PolicyStruct" => null,
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
        if (array_key_exists("PolicyStruct",$param) and $param["PolicyStruct"] !== null) {
            if(is_bool($param["PolicyStruct"])){
                $this->RequestParams["PolicyStruct"] = $param["PolicyStruct"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyStruct"] = $param["PolicyStruct"];
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