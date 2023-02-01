<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class UpdateRoleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Action" => null,
         /**String**/
        "Version" => null,
         /**String**/
        "RoleName" => null,
         /**String**/
        "NewDescription" => null,
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            if(is_bool($param["RoleName"])){
                $this->RequestParams["RoleName"] = $param["RoleName"] ? "true" : "false";
            } else {
                $this->RequestParams["RoleName"] = $param["RoleName"];
            }
        }
        if (array_key_exists("NewDescription",$param) and $param["NewDescription"] !== null) {
            if(is_bool($param["NewDescription"])){
                $this->RequestParams["NewDescription"] = $param["NewDescription"] ? "true" : "false";
            } else {
                $this->RequestParams["NewDescription"] = $param["NewDescription"];
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