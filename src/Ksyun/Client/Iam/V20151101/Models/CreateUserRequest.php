<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateUserRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "UserName" => null,
         /**String**/
        "RealName" => null,
         /**String**/
        "Phone" => null,
         /**String**/
        "Email" => null,
         /**String**/
        "Remark" => null,
         /**String**/
        "Password" => null,
         /**Int**/
        "PasswordResetRequired" => null,
         /**Int**/
        "OpenLoginProtection" => null,
         /**Int**/
        "OpenSecurityProtection" => null,
         /**Int**/
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
        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            if(is_bool($param["RealName"])){
                $this->RequestParams["RealName"] = $param["RealName"] ? "true" : "false";
            } else {
                $this->RequestParams["RealName"] = $param["RealName"];
            }
        }
        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            if(is_bool($param["Phone"])){
                $this->RequestParams["Phone"] = $param["Phone"] ? "true" : "false";
            } else {
                $this->RequestParams["Phone"] = $param["Phone"];
            }
        }
        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            if(is_bool($param["Email"])){
                $this->RequestParams["Email"] = $param["Email"] ? "true" : "false";
            } else {
                $this->RequestParams["Email"] = $param["Email"];
            }
        }
        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            if(is_bool($param["Remark"])){
                $this->RequestParams["Remark"] = $param["Remark"] ? "true" : "false";
            } else {
                $this->RequestParams["Remark"] = $param["Remark"];
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