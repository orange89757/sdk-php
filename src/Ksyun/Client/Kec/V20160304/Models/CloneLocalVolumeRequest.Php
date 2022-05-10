<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CloneLocalVolumeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DstLocalVolumeId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DstLocalVolumeId",$param) and $param["DstLocalVolumeId"] !== null) {
            if(is_bool($param["DstLocalVolumeId"])){
                $this->RequestParams["DstLocalVolumeId"] = $param["DstLocalVolumeId"] ? "true" : "false";
            } else {
                $this->RequestParams["DstLocalVolumeId"] = $param["DstLocalVolumeId"];
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