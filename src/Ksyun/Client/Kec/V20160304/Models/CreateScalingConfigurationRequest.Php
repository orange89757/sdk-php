<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateScalingConfigurationRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ScalingConfigurationName" => null,
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "ImageId" => null,
         /**Int**/
        "Cpu" => null,
         /**Int**/
        "Mem" => null,
         /**Int**/
        "Gpu" => null,
         /**Int**/
        "StorageSize" => null,
         /**Int**/
        "StorageType" => null,
         /**Int**/
        "RootSize" => null,
         /**String**/
        "ChargeType" => null,
         /**String**/
        "DataSnapshotId" => null,
         /**String**/
        "Password" => null,
         /**String**/
        "InstanceType" => null,
         /**String**/
        "Description" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ScalingConfigurationName",$param) and $param["ScalingConfigurationName"] !== null) {
            if(is_bool($param["ScalingConfigurationName"])){
                $this->RequestParams["ScalingConfigurationName"] = $param["ScalingConfigurationName"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingConfigurationName"] = $param["ScalingConfigurationName"];
            }
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            if(is_bool($param["Cpu"])){
                $this->RequestParams["Cpu"] = $param["Cpu"] ? "true" : "false";
            } else {
                $this->RequestParams["Cpu"] = $param["Cpu"];
            }
        }
        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            if(is_bool($param["Mem"])){
                $this->RequestParams["Mem"] = $param["Mem"] ? "true" : "false";
            } else {
                $this->RequestParams["Mem"] = $param["Mem"];
            }
        }
        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            if(is_bool($param["Gpu"])){
                $this->RequestParams["Gpu"] = $param["Gpu"] ? "true" : "false";
            } else {
                $this->RequestParams["Gpu"] = $param["Gpu"];
            }
        }
        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            if(is_bool($param["StorageSize"])){
                $this->RequestParams["StorageSize"] = $param["StorageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["StorageSize"] = $param["StorageSize"];
            }
        }
        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            if(is_bool($param["StorageType"])){
                $this->RequestParams["StorageType"] = $param["StorageType"] ? "true" : "false";
            } else {
                $this->RequestParams["StorageType"] = $param["StorageType"];
            }
        }
        if (array_key_exists("RootSize",$param) and $param["RootSize"] !== null) {
            if(is_bool($param["RootSize"])){
                $this->RequestParams["RootSize"] = $param["RootSize"] ? "true" : "false";
            } else {
                $this->RequestParams["RootSize"] = $param["RootSize"];
            }
        }
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            if(is_bool($param["ChargeType"])){
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
            }
        }
        if (array_key_exists("DataSnapshotId",$param) and $param["DataSnapshotId"] !== null) {
            if(is_bool($param["DataSnapshotId"])){
                $this->RequestParams["DataSnapshotId"] = $param["DataSnapshotId"] ? "true" : "false";
            } else {
                $this->RequestParams["DataSnapshotId"] = $param["DataSnapshotId"];
            }
        }
        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            if(is_bool($param["Password"])){
                $this->RequestParams["Password"] = $param["Password"] ? "true" : "false";
            } else {
                $this->RequestParams["Password"] = $param["Password"];
            }
        }
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            if(is_bool($param["InstanceType"])){
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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