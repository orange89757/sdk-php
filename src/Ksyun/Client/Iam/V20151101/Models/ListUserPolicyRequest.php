<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListUserPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "UserId" => null,
         /**String**/
        "Uuid" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            if(is_bool($param["UserId"])){
                $this->RequestParams["UserId"] = $param["UserId"] ? "true" : "false";
            } else {
                $this->RequestParams["UserId"] = $param["UserId"];
            }
        }
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            if(is_bool($param["Uuid"])){
                $this->RequestParams["Uuid"] = $param["Uuid"] ? "true" : "false";
            } else {
                $this->RequestParams["Uuid"] = $param["Uuid"];
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