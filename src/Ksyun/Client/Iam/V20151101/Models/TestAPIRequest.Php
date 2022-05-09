<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class TestAPIRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "id" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("id",$param) and $param["id"] !== null) {
            if(is_bool($param["id"])){
                $this->RequestParams["id"] = $param["id"] ? "true" : "false";
            } else {
                $this->RequestParams["id"] = $param["id"];
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