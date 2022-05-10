<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyImageSharePermissionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageId" => null,
         /**String**/
        "Permission" => null,
         /**String**/
        "AccountIds" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            if(is_bool($param["Permission"])){
                $this->RequestParams["Permission"] = $param["Permission"] ? "true" : "false";
            } else {
                $this->RequestParams["Permission"] = $param["Permission"];
            }
        }
        if (array_key_exists("AccountIds",$param) and $param["AccountIds"] !== null) {
            if(is_bool($param["AccountIds"])){
                $this->RequestParams["AccountIds"] = $param["AccountIds"] ? "true" : "false";
            } else {
                $this->RequestParams["AccountIds"] = $param["AccountIds"];
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