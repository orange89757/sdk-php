<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class UpdateLoginProfileRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "UserName" => null,
         /**String**/
        "Password" => null,
         /**Boolean**/
        "PasswordResetRequired" => null,
         /**Boolean**/
        "OpenLoginProtection" => null,
         /**Boolean**/
        "OpenSecurityProtection" => null,
         /**Boolean**/
        "ViewAllProject" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            if(is_bool($param["UserName"])){
                $this->RequestParams["UserName"] = $param["UserName"] ? "true" : "false";
            } else {
                $this->RequestParams["UserName"] = $param["UserName"];
            }
        }
        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            if(is_bool($param["Password"])){
                $this->RequestParams["Password"] = $param["Password"] ? "true" : "false";
            } else {
                $this->RequestParams["Password"] = $param["Password"];
            }
        }
        if (array_key_exists("PasswordResetRequired",$param) and $param["PasswordResetRequired"] !== null) {
            if(is_bool($param["PasswordResetRequired"])){
                $this->RequestParams["PasswordResetRequired"] = $param["PasswordResetRequired"] ? "true" : "false";
            } else {
                $this->RequestParams["PasswordResetRequired"] = $param["PasswordResetRequired"];
            }
        }
        if (array_key_exists("OpenLoginProtection",$param) and $param["OpenLoginProtection"] !== null) {
            if(is_bool($param["OpenLoginProtection"])){
                $this->RequestParams["OpenLoginProtection"] = $param["OpenLoginProtection"] ? "true" : "false";
            } else {
                $this->RequestParams["OpenLoginProtection"] = $param["OpenLoginProtection"];
            }
        }
        if (array_key_exists("OpenSecurityProtection",$param) and $param["OpenSecurityProtection"] !== null) {
            if(is_bool($param["OpenSecurityProtection"])){
                $this->RequestParams["OpenSecurityProtection"] = $param["OpenSecurityProtection"] ? "true" : "false";
            } else {
                $this->RequestParams["OpenSecurityProtection"] = $param["OpenSecurityProtection"];
            }
        }
        if (array_key_exists("ViewAllProject",$param) and $param["ViewAllProject"] !== null) {
            if(is_bool($param["ViewAllProject"])){
                $this->RequestParams["ViewAllProject"] = $param["ViewAllProject"] ? "true" : "false";
            } else {
                $this->RequestParams["ViewAllProject"] = $param["ViewAllProject"];
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