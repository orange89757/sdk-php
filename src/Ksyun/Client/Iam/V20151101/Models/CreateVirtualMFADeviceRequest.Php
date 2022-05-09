<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateVirtualMFADeviceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Action" => null,
         /**String**/
        "Version" => null,
         /**String**/
        "VirtualMFADeviceName" => null,
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
        if (array_key_exists("VirtualMFADeviceName",$param) and $param["VirtualMFADeviceName"] !== null) {
            if(is_bool($param["VirtualMFADeviceName"])){
                $this->RequestParams["VirtualMFADeviceName"] = $param["VirtualMFADeviceName"] ? "true" : "false";
            } else {
                $this->RequestParams["VirtualMFADeviceName"] = $param["VirtualMFADeviceName"];
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