<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeImageNumRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageType" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            if(is_bool($param["ImageType"])){
                $this->RequestParams["ImageType"] = $param["ImageType"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageType"] = $param["ImageType"];
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