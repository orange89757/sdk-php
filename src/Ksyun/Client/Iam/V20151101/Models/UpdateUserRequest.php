<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class UpdateUserRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "UserName" => null,
         /**String**/
        "NewUserName" => null,
         /**String**/
        "NewRealName" => null,
         /**String**/
        "NewEmail" => null,
         /**String**/
        "NewPhone" => null,
         /**Int**/
        "IsInternational" => null,
         /**String**/
        "NewRemark" => null,
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
        if (array_key_exists("NewUserName",$param) and $param["NewUserName"] !== null) {
            if(is_bool($param["NewUserName"])){
                $this->RequestParams["NewUserName"] = $param["NewUserName"] ? "true" : "false";
            } else {
                $this->RequestParams["NewUserName"] = $param["NewUserName"];
            }
        }
        if (array_key_exists("NewRealName",$param) and $param["NewRealName"] !== null) {
            if(is_bool($param["NewRealName"])){
                $this->RequestParams["NewRealName"] = $param["NewRealName"] ? "true" : "false";
            } else {
                $this->RequestParams["NewRealName"] = $param["NewRealName"];
            }
        }
        if (array_key_exists("NewEmail",$param) and $param["NewEmail"] !== null) {
            if(is_bool($param["NewEmail"])){
                $this->RequestParams["NewEmail"] = $param["NewEmail"] ? "true" : "false";
            } else {
                $this->RequestParams["NewEmail"] = $param["NewEmail"];
            }
        }
        if (array_key_exists("NewPhone",$param) and $param["NewPhone"] !== null) {
            if(is_bool($param["NewPhone"])){
                $this->RequestParams["NewPhone"] = $param["NewPhone"] ? "true" : "false";
            } else {
                $this->RequestParams["NewPhone"] = $param["NewPhone"];
            }
        }
        if (array_key_exists("IsInternational",$param) and $param["IsInternational"] !== null) {
            if(is_bool($param["IsInternational"])){
                $this->RequestParams["IsInternational"] = $param["IsInternational"] ? "true" : "false";
            } else {
                $this->RequestParams["IsInternational"] = $param["IsInternational"];
            }
        }
        if (array_key_exists("NewRemark",$param) and $param["NewRemark"] !== null) {
            if(is_bool($param["NewRemark"])){
                $this->RequestParams["NewRemark"] = $param["NewRemark"] ? "true" : "false";
            } else {
                $this->RequestParams["NewRemark"] = $param["NewRemark"];
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