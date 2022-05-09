<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class DeleteAccessKeyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Action" => null,
         /**String**/
        "Version" => null,
         /**String**/
        "AccessKeyId" => null,
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
        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            if(is_bool($param["AccessKeyId"])){
                $this->RequestParams["AccessKeyId"] = $param["AccessKeyId"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessKeyId"] = $param["AccessKeyId"];
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