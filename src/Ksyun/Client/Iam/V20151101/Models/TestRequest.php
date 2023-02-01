<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class TestRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "test" => null,
         /**String**/
        "InstatceIdRe" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("test",$param) and $param["test"] !== null) {
            if(is_bool($param["test"])){
                $this->RequestParams["test"] = $param["test"] ? "true" : "false";
            } else {
                $this->RequestParams["test"] = $param["test"];
            }
        }
        if (array_key_exists("InstatceIdRe",$param) and $param["InstatceIdRe"] !== null) {
            if(is_bool($param["InstatceIdRe"])){
                $this->RequestParams["InstatceIdRe"] = $param["InstatceIdRe"] ? "true" : "false";
            } else {
                $this->RequestParams["InstatceIdRe"] = $param["InstatceIdRe"];
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