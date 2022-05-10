<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class QueryVmHostInfoRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "hostName" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("hostName",$param) and $param["hostName"] !== null) {
            if(is_bool($param["hostName"])){
                $this->RequestParams["hostName"] = $param["hostName"] ? "true" : "false";
            } else {
                $this->RequestParams["hostName"] = $param["hostName"];
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