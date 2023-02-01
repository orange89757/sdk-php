<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class DeleteAccessKeyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "UserName" => null,
         /**String**/
        "AccessKeyId" => null,
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
        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            if(is_bool($param["AccessKeyId"])){
                $this->RequestParams["AccessKeyId"] = $param["AccessKeyId"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessKeyId"] = $param["AccessKeyId"];
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