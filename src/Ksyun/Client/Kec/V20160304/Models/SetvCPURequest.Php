<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class SetvCPURequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DedicatedHostId" => null,
         /**Int**/
        "VCPU" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DedicatedHostId",$param) and $param["DedicatedHostId"] !== null) {
            if(is_bool($param["DedicatedHostId"])){
                $this->RequestParams["DedicatedHostId"] = $param["DedicatedHostId"] ? "true" : "false";
            } else {
                $this->RequestParams["DedicatedHostId"] = $param["DedicatedHostId"];
            }
        }
        if (array_key_exists("VCPU",$param) and $param["VCPU"] !== null) {
            if(is_bool($param["VCPU"])){
                $this->RequestParams["VCPU"] = $param["VCPU"] ? "true" : "false";
            } else {
                $this->RequestParams["VCPU"] = $param["VCPU"];
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