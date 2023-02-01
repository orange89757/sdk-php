<?php
namespace  Ksyun\Client\Iam\V20190505\Models;

use Ksyun\Common\BaseModel;

class ReTestRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "name" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("name",$param) and $param["name"] !== null) {
            if(is_bool($param["name"])){
                $this->RequestParams["name"] = $param["name"] ? "true" : "false";
            } else {
                $this->RequestParams["name"] = $param["name"];
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