<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeInstanceFamilysRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "action" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("action",$param) and $param["action"] !== null) {
            if(is_bool($param["action"])){
                $this->RequestParams["action"] = $param["action"] ? "true" : "false";
            } else {
                $this->RequestParams["action"] = $param["action"];
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