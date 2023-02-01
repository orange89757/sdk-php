<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateRoleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "RoleName" => null,
         /**String**/
        "TrustAccounts" => null,
         /**String**/
        "Description" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            if(is_bool($param["RoleName"])){
                $this->RequestParams["RoleName"] = $param["RoleName"] ? "true" : "false";
            } else {
                $this->RequestParams["RoleName"] = $param["RoleName"];
            }
        }
        if (array_key_exists("TrustAccounts",$param) and $param["TrustAccounts"] !== null) {
            if(is_bool($param["TrustAccounts"])){
                $this->RequestParams["TrustAccounts"] = $param["TrustAccounts"] ? "true" : "false";
            } else {
                $this->RequestParams["TrustAccounts"] = $param["TrustAccounts"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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