<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeInstanceTypeConfigsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "filter" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("filter",$param) and $param["filter"] !== null) {
            if(is_bool($param["filter"])){
                $this->RequestParams["filter"] = $param["filter"] ? "true" : "false";
            } else {
                $this->RequestParams["filter"] = $param["filter"];
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