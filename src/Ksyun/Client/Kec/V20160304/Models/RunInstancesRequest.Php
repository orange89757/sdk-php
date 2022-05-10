<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class RunInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageId" => null,
         /**Int**/
        "ProjectId" => null,
         /**String**/
        "InstanceType" => null,
         /**Int**/
        "MaxCount" => null,
         /**Int**/
        "MinCount" => null,
         /**String**/
        "SecurityGroupId" => null,
         /**String**/
        "SubnetId" => null,
         /**String**/
        "PrivateIpAddress" => null,
         /**String**/
        "InstanceName" => null,
         /**String**/
        "InstancePassword" => null,
         /**Int**/
        "DataDiskGb" => null,
         /**Int**/
        "RootDiskGb" => null,
         /**String**/
        "SriovNetSupport" => null,
         /**Int**/
        "InstanceNameSuffix" => null,
         /**String**/
        "LocalVolumeSnapshotId" => null,
         /**String**/
        "DataGuardId" => null,
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "DedicatedHostId" => null,
         /**Int**/
        "InstanceConfigure_VCPU" => null,
         /**Int**/
        "InstanceConfigure_MemoryGb" => null,
         /**Int**/
        "InstanceConfigure_DataDiskGb" => null,
         /**Int**/
        "InstanceConfigure_Gpu" => null,
         /**String**/
        "OrderId" => null,
         /**String**/
        "SubOrderId" => null,
         /**String**/
        "ChargeType" => null,
         /**Int**/
        "PurchaseTime" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            if(is_bool($param["InstanceType"])){
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("MaxCount",$param) and $param["MaxCount"] !== null) {
            if(is_bool($param["MaxCount"])){
                $this->RequestParams["MaxCount"] = $param["MaxCount"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxCount"] = $param["MaxCount"];
            }
        }
        if (array_key_exists("MinCount",$param) and $param["MinCount"] !== null) {
            if(is_bool($param["MinCount"])){
                $this->RequestParams["MinCount"] = $param["MinCount"] ? "true" : "false";
            } else {
                $this->RequestParams["MinCount"] = $param["MinCount"];
            }
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            if(is_bool($param["SubnetId"])){
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            if(is_bool($param["PrivateIpAddress"])){
                $this->RequestParams["PrivateIpAddress"] = $param["PrivateIpAddress"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateIpAddress"] = $param["PrivateIpAddress"];
            }
        }
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            if(is_bool($param["InstanceName"])){
                $this->RequestParams["InstanceName"] = $param["InstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceName"] = $param["InstanceName"];
            }
        }
        if (array_key_exists("InstancePassword",$param) and $param["InstancePassword"] !== null) {
            if(is_bool($param["InstancePassword"])){
                $this->RequestParams["InstancePassword"] = $param["InstancePassword"] ? "true" : "false";
            } else {
                $this->RequestParams["InstancePassword"] = $param["InstancePassword"];
            }
        }
        if (array_key_exists("DataDiskGb",$param) and $param["DataDiskGb"] !== null) {
            if(is_bool($param["DataDiskGb"])){
                $this->RequestParams["DataDiskGb"] = $param["DataDiskGb"] ? "true" : "false";
            } else {
                $this->RequestParams["DataDiskGb"] = $param["DataDiskGb"];
            }
        }
        if (array_key_exists("RootDiskGb",$param) and $param["RootDiskGb"] !== null) {
            if(is_bool($param["RootDiskGb"])){
                $this->RequestParams["RootDiskGb"] = $param["RootDiskGb"] ? "true" : "false";
            } else {
                $this->RequestParams["RootDiskGb"] = $param["RootDiskGb"];
            }
        }
        if (array_key_exists("SriovNetSupport",$param) and $param["SriovNetSupport"] !== null) {
            if(is_bool($param["SriovNetSupport"])){
                $this->RequestParams["SriovNetSupport"] = $param["SriovNetSupport"] ? "true" : "false";
            } else {
                $this->RequestParams["SriovNetSupport"] = $param["SriovNetSupport"];
            }
        }
        if (array_key_exists("InstanceNameSuffix",$param) and $param["InstanceNameSuffix"] !== null) {
            if(is_bool($param["InstanceNameSuffix"])){
                $this->RequestParams["InstanceNameSuffix"] = $param["InstanceNameSuffix"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceNameSuffix"] = $param["InstanceNameSuffix"];
            }
        }
        if (array_key_exists("LocalVolumeSnapshotId",$param) and $param["LocalVolumeSnapshotId"] !== null) {
            if(is_bool($param["LocalVolumeSnapshotId"])){
                $this->RequestParams["LocalVolumeSnapshotId"] = $param["LocalVolumeSnapshotId"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalVolumeSnapshotId"] = $param["LocalVolumeSnapshotId"];
            }
        }
        if (array_key_exists("DataGuardId",$param) and $param["DataGuardId"] !== null) {
            if(is_bool($param["DataGuardId"])){
                $this->RequestParams["DataGuardId"] = $param["DataGuardId"] ? "true" : "false";
            } else {
                $this->RequestParams["DataGuardId"] = $param["DataGuardId"];
            }
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("DedicatedHostId",$param) and $param["DedicatedHostId"] !== null) {
            if(is_bool($param["DedicatedHostId"])){
                $this->RequestParams["DedicatedHostId"] = $param["DedicatedHostId"] ? "true" : "false";
            } else {
                $this->RequestParams["DedicatedHostId"] = $param["DedicatedHostId"];
            }
        }
        if (array_key_exists("InstanceConfigure_VCPU",$param) and $param["InstanceConfigure_VCPU"] !== null) {
            if(is_bool($param["InstanceConfigure_VCPU"])){
                $this->RequestParams["InstanceConfigure_VCPU"] = $param["InstanceConfigure_VCPU"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceConfigure_VCPU"] = $param["InstanceConfigure_VCPU"];
            }
        }
        if (array_key_exists("InstanceConfigure_MemoryGb",$param) and $param["InstanceConfigure_MemoryGb"] !== null) {
            if(is_bool($param["InstanceConfigure_MemoryGb"])){
                $this->RequestParams["InstanceConfigure_MemoryGb"] = $param["InstanceConfigure_MemoryGb"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceConfigure_MemoryGb"] = $param["InstanceConfigure_MemoryGb"];
            }
        }
        if (array_key_exists("InstanceConfigure_DataDiskGb",$param) and $param["InstanceConfigure_DataDiskGb"] !== null) {
            if(is_bool($param["InstanceConfigure_DataDiskGb"])){
                $this->RequestParams["InstanceConfigure_DataDiskGb"] = $param["InstanceConfigure_DataDiskGb"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceConfigure_DataDiskGb"] = $param["InstanceConfigure_DataDiskGb"];
            }
        }
        if (array_key_exists("InstanceConfigure_Gpu",$param) and $param["InstanceConfigure_Gpu"] !== null) {
            if(is_bool($param["InstanceConfigure_Gpu"])){
                $this->RequestParams["InstanceConfigure_Gpu"] = $param["InstanceConfigure_Gpu"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceConfigure_Gpu"] = $param["InstanceConfigure_Gpu"];
            }
        }
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            if(is_bool($param["OrderId"])){
                $this->RequestParams["OrderId"] = $param["OrderId"] ? "true" : "false";
            } else {
                $this->RequestParams["OrderId"] = $param["OrderId"];
            }
        }
        if (array_key_exists("SubOrderId",$param) and $param["SubOrderId"] !== null) {
            if(is_bool($param["SubOrderId"])){
                $this->RequestParams["SubOrderId"] = $param["SubOrderId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubOrderId"] = $param["SubOrderId"];
            }
        }
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            if(is_bool($param["ChargeType"])){
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
            }
        }
        if (array_key_exists("PurchaseTime",$param) and $param["PurchaseTime"] !== null) {
            if(is_bool($param["PurchaseTime"])){
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"];
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