<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ChangePasswordRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Action" => null,
         /**String**/
        "Version" => null,
         /**String**/
        "OldPassword" => null,
         /**String**/
        "NewPassword" => null,
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
        if (array_key_exists("OldPassword",$param) and $param["OldPassword"] !== null) {
            if(is_bool($param["OldPassword"])){
                $this->RequestParams["OldPassword"] = $param["OldPassword"] ? "true" : "false";
            } else {
                $this->RequestParams["OldPassword"] = $param["OldPassword"];
            }
        }
        if (array_key_exists("NewPassword",$param) and $param["NewPassword"] !== null) {
            if(is_bool($param["NewPassword"])){
                $this->RequestParams["NewPassword"] = $param["NewPassword"] ? "true" : "false";
            } else {
                $this->RequestParams["NewPassword"] = $param["NewPassword"];
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