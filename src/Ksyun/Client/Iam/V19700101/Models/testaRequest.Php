<?php
namespace  Ksyun\Client\Iam\V19700101\Models;

use Ksyun\Common\BaseModel;

class testaRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "asdf" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("asdf",$param) and $param["asdf"] !== null) {
            if(is_bool($param["asdf"])){
                $this->RequestParams["asdf"] = $param["asdf"] ? "true" : "false";
            } else {
                $this->RequestParams["asdf"] = $param["asdf"];
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