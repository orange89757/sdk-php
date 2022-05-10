<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyLocalVolumeSnapshotRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "LocalVolumeSnapshotId" => null,
         /**String**/
        "LocalVolumeSnapshotName" => null,
         /**String**/
        "LocalVolumeSnapshotDesc" => null,
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
        if (array_key_exists("LocalVolumeSnapshotName",$param) and $param["LocalVolumeSnapshotName"] !== null) {
            if(is_bool($param["LocalVolumeSnapshotName"])){
                $this->RequestParams["LocalVolumeSnapshotName"] = $param["LocalVolumeSnapshotName"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalVolumeSnapshotName"] = $param["LocalVolumeSnapshotName"];
            }
        }
        if (array_key_exists("LocalVolumeSnapshotDesc",$param) and $param["LocalVolumeSnapshotDesc"] !== null) {
            if(is_bool($param["LocalVolumeSnapshotDesc"])){
                $this->RequestParams["LocalVolumeSnapshotDesc"] = $param["LocalVolumeSnapshotDesc"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalVolumeSnapshotDesc"] = $param["LocalVolumeSnapshotDesc"];
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