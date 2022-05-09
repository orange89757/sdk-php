<?php
namespace  Ksyun\Client\Kec1\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyInstanceTypeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "InstanceType" => null,
         /**String**/
        "InstanceConfigureVCPU" => null,
         /**String**/
        "InstanceConfigure.MemoryGb" => null,
         /**String**/
        "DataDiskGb" => null,
         /**Boolean**/
        "CrossInstanceMigrate" => null,
         /**String**/
        "SystemDisk.DiskType" => null,
    ];

     /**特殊参数类型:Filter**/
    public $DataDisk = [];
 
    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            if(is_bool($param["InstanceType"])){
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("InstanceConfigureVCPU",$param) and $param["InstanceConfigureVCPU"] !== null) {
            if(is_bool($param["InstanceConfigureVCPU"])){
                $this->RequestParams["InstanceConfigureVCPU"] = $param["InstanceConfigureVCPU"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceConfigureVCPU"] = $param["InstanceConfigureVCPU"];
            }
        }
        if (array_key_exists("InstanceConfigure.MemoryGb",$param) and $param["InstanceConfigure.MemoryGb"] !== null) {
            if(is_bool($param["InstanceConfigure.MemoryGb"])){
                $this->RequestParams["InstanceConfigure.MemoryGb"] = $param["InstanceConfigure.MemoryGb"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceConfigure.MemoryGb"] = $param["InstanceConfigure.MemoryGb"];
            }
        }
        if (array_key_exists("DataDiskGb",$param) and $param["DataDiskGb"] !== null) {
            if(is_bool($param["DataDiskGb"])){
                $this->RequestParams["DataDiskGb"] = $param["DataDiskGb"] ? "true" : "false";
            } else {
                $this->RequestParams["DataDiskGb"] = $param["DataDiskGb"];
            }
        }
        if (array_key_exists("CrossInstanceMigrate",$param) and $param["CrossInstanceMigrate"] !== null) {
            if(is_bool($param["CrossInstanceMigrate"])){
                $this->RequestParams["CrossInstanceMigrate"] = $param["CrossInstanceMigrate"] ? "true" : "false";
            } else {
                $this->RequestParams["CrossInstanceMigrate"] = $param["CrossInstanceMigrate"];
            }
        }
        if (array_key_exists("SystemDisk.DiskType",$param) and $param["SystemDisk.DiskType"] !== null) {
            if(is_bool($param["SystemDisk.DiskType"])){
                $this->RequestParams["SystemDisk.DiskType"] = $param["SystemDisk.DiskType"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemDisk.DiskType"] = $param["SystemDisk.DiskType"];
            }
        }
        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $res = $this->formatFilterParams("DataDisk",$param["DataDisk"]);
            $this->_unserialize("DataDisk",$res);
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