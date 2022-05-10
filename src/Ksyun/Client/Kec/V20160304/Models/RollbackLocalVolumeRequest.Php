<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class RollbackLocalVolumeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "LocalVolumeSnapshotId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LocalVolumeSnapshotId",$param) and $param["LocalVolumeSnapshotId"] !== null) {
            if(is_bool($param["LocalVolumeSnapshotId"])){
                $this->RequestParams["LocalVolumeSnapshotId"] = $param["LocalVolumeSnapshotId"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalVolumeSnapshotId"] = $param["LocalVolumeSnapshotId"];
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