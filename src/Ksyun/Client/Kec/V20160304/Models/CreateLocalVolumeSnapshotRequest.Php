<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateLocalVolumeSnapshotRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "LocalVolumeId" => null,
         /**String**/
        "LocalVolumeSnapshotName" => null,
         /**String**/
        "LocalVolumeSnapshotDesc" => null,
         /**String**/
        "SnapshotType" => null,
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
        if (array_key_exists("SnapshotType",$param) and $param["SnapshotType"] !== null) {
            if(is_bool($param["SnapshotType"])){
                $this->RequestParams["SnapshotType"] = $param["SnapshotType"] ? "true" : "false";
            } else {
                $this->RequestParams["SnapshotType"] = $param["SnapshotType"];
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