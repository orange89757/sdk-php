<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyLocalVolumeInfoRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "LocalVolumeId" => null,
         /**String**/
        "LocalVolumeName" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LocalVolumeId",$param) and $param["LocalVolumeId"] !== null) {
            if(is_bool($param["LocalVolumeId"])){
                $this->RequestParams["LocalVolumeId"] = $param["LocalVolumeId"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalVolumeId"] = $param["LocalVolumeId"];
            }
        }
        if (array_key_exists("LocalVolumeName",$param) and $param["LocalVolumeName"] !== null) {
            if(is_bool($param["LocalVolumeName"])){
                $this->RequestParams["LocalVolumeName"] = $param["LocalVolumeName"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalVolumeName"] = $param["LocalVolumeName"];
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