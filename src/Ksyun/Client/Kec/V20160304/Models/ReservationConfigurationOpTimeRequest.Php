<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ReservationConfigurationOpTimeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "instanceIds" => null,
         /**String**/
        "ExecutionTime" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("instanceIds",$param) and $param["instanceIds"] !== null) {
            if(is_bool($param["instanceIds"])){
                $this->RequestParams["instanceIds"] = $param["instanceIds"] ? "true" : "false";
            } else {
                $this->RequestParams["instanceIds"] = $param["instanceIds"];
            }
        }
        if (array_key_exists("ExecutionTime",$param) and $param["ExecutionTime"] !== null) {
            if(is_bool($param["ExecutionTime"])){
                $this->RequestParams["ExecutionTime"] = $param["ExecutionTime"] ? "true" : "false";
            } else {
                $this->RequestParams["ExecutionTime"] = $param["ExecutionTime"];
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