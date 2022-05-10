<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeLocalVolumeSnapshotsRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "MaxResults" => null,
         /**String**/
        "Marker" => null,
         /**String**/
        "Search" => null,
         /**String**/
        "LocalVolumeCategory" => null,
         /**String**/
        "LocalVolumeName" => null,
         /**String**/
        "LocalVolumeSnapshotId" => null,
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
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            if(is_bool($param["MaxResults"])){
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
            }
        }
        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            if(is_bool($param["Marker"])){
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("Search",$param) and $param["Search"] !== null) {
            if(is_bool($param["Search"])){
                $this->RequestParams["Search"] = $param["Search"] ? "true" : "false";
            } else {
                $this->RequestParams["Search"] = $param["Search"];
            }
        }
        if (array_key_exists("LocalVolumeCategory",$param) and $param["LocalVolumeCategory"] !== null) {
            if(is_bool($param["LocalVolumeCategory"])){
                $this->RequestParams["LocalVolumeCategory"] = $param["LocalVolumeCategory"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalVolumeCategory"] = $param["LocalVolumeCategory"];
            }
        }
        if (array_key_exists("LocalVolumeName",$param) and $param["LocalVolumeName"] !== null) {
            if(is_bool($param["LocalVolumeName"])){
                $this->RequestParams["LocalVolumeName"] = $param["LocalVolumeName"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalVolumeName"] = $param["LocalVolumeName"];
            }
        }
        if (array_key_exists("LocalVolumeSnapshotId",$param) and $param["LocalVolumeSnapshotId"] !== null) {
            if(is_bool($param["LocalVolumeSnapshotId"])){
                $this->RequestParams["LocalVolumeSnapshotId"] = $param["LocalVolumeSnapshotId"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalVolumeSnapshotId"] = $param["LocalVolumeSnapshotId"];
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