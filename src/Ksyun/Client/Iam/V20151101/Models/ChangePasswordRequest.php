<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ChangePasswordRequest extends BaseModel
{
    public $RequestParams = [
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