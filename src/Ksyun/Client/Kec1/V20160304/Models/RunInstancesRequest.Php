<?php
namespace  Ksyun\Client\Kec1\V20160304\Models;

use Ksyun\Common\BaseModel;

class RunInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**Boolean**/
        "InstanceType" => null,
         /**String**/
        "SystemDisk" => null,
         /**Int**/
        "MaxCount" => null,
         /**Int**/
        "MinCount" => null,
         /**Int**/
        "DataDiskGb" => null,
         /**String**/
        "LocalVolumeSnapshotId" => null,
         /**String**/
        "InstancePassword" => null,
         /**Boolean**/
        "KeepImageLogin" => null,
         /**String**/
        "ChargeType" => null,
         /**Int**/
        "PurchaseTime" => null,
         /**String**/
        "PrivateIpAddress" => null,
         /**String**/
        "InstanceName" => null,
         /**String**/
        "InstanceNameSuffix" => null,
         /**String**/
        "SriovNetSupport" => null,
         /**Int**/
        "ProjectId" => null,
         /**String**/
        "DataGuardId" => null,
         /**String**/
        "SpotStrategy" => null,
         /**Double**/
        "SpotPriceLimit" => null,
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "DedicatedHostId" => null,
         /**Int**/
        "AddressBandWidth" => null,
         /**String**/
        "LineId" => null,
         /**String**/
        "AddressChargeType" => null,
         /**Int**/
        "AddressPurchaseTime" => null,
         /**Boolean**/
        "AutoDeleteEip" => null,
         /**String**/
        "HostName" => null,
         /**Int**/
        "HostNameSuffix" => null,
         /**String**/
        "UserData" => null,
         /**String**/
        "IamRoleName" => null,
         /**String**/
        "ImageId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $DataDisk = [];
      /**特殊参数类型:Filter**/
    public $NetworkInterface = [];
      /**特殊参数类型:Filter**/
    public $KeyId = [];
      /**特殊参数类型:Filter**/
    public $SecurityGroupId = [];
      /**特殊参数类型:Filter**/
    public $1 = [];
 
    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            if(is_bool($param["InstanceType"])){
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            if(is_bool($param["SystemDisk"])){
                $this->RequestParams["SystemDisk"] = $param["SystemDisk"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemDisk"] = $param["SystemDisk"];
            }
        }
        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $res = $this->formatFilterParams("DataDisk",$param["DataDisk"]);
            $this->_unserialize("DataDisk",$res);
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
        if (array_key_exists("DataDiskGb",$param) and $param["DataDiskGb"] !== null) {
            if(is_bool($param["DataDiskGb"])){
                $this->RequestParams["DataDiskGb"] = $param["DataDiskGb"] ? "true" : "false";
            } else {
                $this->RequestParams["DataDiskGb"] = $param["DataDiskGb"];
            }
        }
        if (array_key_exists("NetworkInterface",$param) and $param["NetworkInterface"] !== null) {
            $res = $this->formatFilterParams("NetworkInterface",$param["NetworkInterface"]);
            $this->_unserialize("NetworkInterface",$res);
        }
        if (array_key_exists("LocalVolumeSnapshotId",$param) and $param["LocalVolumeSnapshotId"] !== null) {
            if(is_bool($param["LocalVolumeSnapshotId"])){
                $this->RequestParams["LocalVolumeSnapshotId"] = $param["LocalVolumeSnapshotId"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalVolumeSnapshotId"] = $param["LocalVolumeSnapshotId"];
            }
        }
        if (array_key_exists("InstancePassword",$param) and $param["InstancePassword"] !== null) {
            if(is_bool($param["InstancePassword"])){
                $this->RequestParams["InstancePassword"] = $param["InstancePassword"] ? "true" : "false";
            } else {
                $this->RequestParams["InstancePassword"] = $param["InstancePassword"];
            }
        }
        if (array_key_exists("KeepImageLogin",$param) and $param["KeepImageLogin"] !== null) {
            if(is_bool($param["KeepImageLogin"])){
                $this->RequestParams["KeepImageLogin"] = $param["KeepImageLogin"] ? "true" : "false";
            } else {
                $this->RequestParams["KeepImageLogin"] = $param["KeepImageLogin"];
            }
        }
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $res = $this->formatFilterParams("KeyId",$param["KeyId"]);
            $this->_unserialize("KeyId",$res);
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $res = $this->formatFilterParams("SecurityGroupId",$param["SecurityGroupId"]);
            $this->_unserialize("SecurityGroupId",$res);
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
        if (array_key_exists("InstanceNameSuffix",$param) and $param["InstanceNameSuffix"] !== null) {
            if(is_bool($param["InstanceNameSuffix"])){
                $this->RequestParams["InstanceNameSuffix"] = $param["InstanceNameSuffix"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceNameSuffix"] = $param["InstanceNameSuffix"];
            }
        }
        if (array_key_exists("SriovNetSupport",$param) and $param["SriovNetSupport"] !== null) {
            if(is_bool($param["SriovNetSupport"])){
                $this->RequestParams["SriovNetSupport"] = $param["SriovNetSupport"] ? "true" : "false";
            } else {
                $this->RequestParams["SriovNetSupport"] = $param["SriovNetSupport"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("DataGuardId",$param) and $param["DataGuardId"] !== null) {
            if(is_bool($param["DataGuardId"])){
                $this->RequestParams["DataGuardId"] = $param["DataGuardId"] ? "true" : "false";
            } else {
                $this->RequestParams["DataGuardId"] = $param["DataGuardId"];
            }
        }
        if (array_key_exists("SpotStrategy",$param) and $param["SpotStrategy"] !== null) {
            if(is_bool($param["SpotStrategy"])){
                $this->RequestParams["SpotStrategy"] = $param["SpotStrategy"] ? "true" : "false";
            } else {
                $this->RequestParams["SpotStrategy"] = $param["SpotStrategy"];
            }
        }
        if (array_key_exists("SpotPriceLimit",$param) and $param["SpotPriceLimit"] !== null) {
            if(is_bool($param["SpotPriceLimit"])){
                $this->RequestParams["SpotPriceLimit"] = $param["SpotPriceLimit"] ? "true" : "false";
            } else {
                $this->RequestParams["SpotPriceLimit"] = $param["SpotPriceLimit"];
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
        if (array_key_exists("AddressBandWidth",$param) and $param["AddressBandWidth"] !== null) {
            if(is_bool($param["AddressBandWidth"])){
                $this->RequestParams["AddressBandWidth"] = $param["AddressBandWidth"] ? "true" : "false";
            } else {
                $this->RequestParams["AddressBandWidth"] = $param["AddressBandWidth"];
            }
        }
        if (array_key_exists("LineId",$param) and $param["LineId"] !== null) {
            if(is_bool($param["LineId"])){
                $this->RequestParams["LineId"] = $param["LineId"] ? "true" : "false";
            } else {
                $this->RequestParams["LineId"] = $param["LineId"];
            }
        }
        if (array_key_exists("AddressChargeType",$param) and $param["AddressChargeType"] !== null) {
            if(is_bool($param["AddressChargeType"])){
                $this->RequestParams["AddressChargeType"] = $param["AddressChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["AddressChargeType"] = $param["AddressChargeType"];
            }
        }
        if (array_key_exists("AddressPurchaseTime",$param) and $param["AddressPurchaseTime"] !== null) {
            if(is_bool($param["AddressPurchaseTime"])){
                $this->RequestParams["AddressPurchaseTime"] = $param["AddressPurchaseTime"] ? "true" : "false";
            } else {
                $this->RequestParams["AddressPurchaseTime"] = $param["AddressPurchaseTime"];
            }
        }
        if (array_key_exists("AutoDeleteEip",$param) and $param["AutoDeleteEip"] !== null) {
            if(is_bool($param["AutoDeleteEip"])){
                $this->RequestParams["AutoDeleteEip"] = $param["AutoDeleteEip"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoDeleteEip"] = $param["AutoDeleteEip"];
            }
        }
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            if(is_bool($param["HostName"])){
                $this->RequestParams["HostName"] = $param["HostName"] ? "true" : "false";
            } else {
                $this->RequestParams["HostName"] = $param["HostName"];
            }
        }
        if (array_key_exists("HostNameSuffix",$param) and $param["HostNameSuffix"] !== null) {
            if(is_bool($param["HostNameSuffix"])){
                $this->RequestParams["HostNameSuffix"] = $param["HostNameSuffix"] ? "true" : "false";
            } else {
                $this->RequestParams["HostNameSuffix"] = $param["HostNameSuffix"];
            }
        }
        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            if(is_bool($param["UserData"])){
                $this->RequestParams["UserData"] = $param["UserData"] ? "true" : "false";
            } else {
                $this->RequestParams["UserData"] = $param["UserData"];
            }
        }
        if (array_key_exists("IamRoleName",$param) and $param["IamRoleName"] !== null) {
            if(is_bool($param["IamRoleName"])){
                $this->RequestParams["IamRoleName"] = $param["IamRoleName"] ? "true" : "false";
            } else {
                $this->RequestParams["IamRoleName"] = $param["IamRoleName"];
            }
        }
        if (array_key_exists("1",$param) and $param["1"] !== null) {
            $res = $this->formatFilterParams("1",$param["1"]);
            $this->_unserialize("1",$res);
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
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