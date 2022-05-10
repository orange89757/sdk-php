<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CopySnapshotRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CopySnapshot" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CopySnapshot",$param) and $param["CopySnapshot"] !== null) {
            if(is_bool($param["CopySnapshot"])){
                $this->RequestParams["CopySnapshot"] = $param["CopySnapshot"] ? "true" : "false";
            } else {
                $this->RequestParams["CopySnapshot"] = $param["CopySnapshot"];
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