<?php
namespace  Ksyun\Client\Iam\V20200923\Models;

use Ksyun\Common\BaseModel;

class StartInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "instanceid" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("instanceid",$param) and $param["instanceid"] !== null) {
            if(is_bool($param["instanceid"])){
                $this->RequestParams["instanceid"] = $param["instanceid"] ? "true" : "false";
            } else {
                $this->RequestParams["instanceid"] = $param["instanceid"];
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