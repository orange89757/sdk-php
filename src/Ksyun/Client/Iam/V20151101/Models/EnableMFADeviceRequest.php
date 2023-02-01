<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class EnableMFADeviceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AuthenticationCode1" => null,
         /**String**/
        "AuthenticationCode2" => null,
         /**String**/
        "SerialNumber" => null,
         /**String**/
        "UserName" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AuthenticationCode1",$param) and $param["AuthenticationCode1"] !== null) {
            if(is_bool($param["AuthenticationCode1"])){
                $this->RequestParams["AuthenticationCode1"] = $param["AuthenticationCode1"] ? "true" : "false";
            } else {
                $this->RequestParams["AuthenticationCode1"] = $param["AuthenticationCode1"];
            }
        }
        if (array_key_exists("AuthenticationCode2",$param) and $param["AuthenticationCode2"] !== null) {
            if(is_bool($param["AuthenticationCode2"])){
                $this->RequestParams["AuthenticationCode2"] = $param["AuthenticationCode2"] ? "true" : "false";
            } else {
                $this->RequestParams["AuthenticationCode2"] = $param["AuthenticationCode2"];
            }
        }
        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            if(is_bool($param["SerialNumber"])){
                $this->RequestParams["SerialNumber"] = $param["SerialNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["SerialNumber"] = $param["SerialNumber"];
            }
        }
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            if(is_bool($param["UserName"])){
                $this->RequestParams["UserName"] = $param["UserName"] ? "true" : "false";
            } else {
                $this->RequestParams["UserName"] = $param["UserName"];
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