<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteDedicatedClusterRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DedicatedClusterId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            if(is_bool($param["DedicatedClusterId"])){
                $this->RequestParams["DedicatedClusterId"] = $param["DedicatedClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["DedicatedClusterId"] = $param["DedicatedClusterId"];
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