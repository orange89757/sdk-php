<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeInstanceConfigInfosRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "availability-zone" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("availability-zone",$param) and $param["availability-zone"] !== null) {
            if(is_bool($param["availability-zone"])){
                $this->RequestParams["availability-zone"] = $param["availability-zone"] ? "true" : "false";
            } else {
                $this->RequestParams["availability-zone"] = $param["availability-zone"];
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