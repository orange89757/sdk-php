<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyInstanceTypeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "InstanceType" => null,
         /**Int**/
        "DataDiskGb" => null,
         /**Int**/
        "InstanceConfigure_DataDiskGb" => null,
         /**Int**/
        "InstanceConfigure_VCPU" => null,
         /**Int**/
        "InstanceConfigure_MemoryGb" => null,
         /**Int**/
        "InstanceConfigure_Gpu" => null,
    ];


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
        if (array_key_exists("DataDiskGb",$param) and $param["DataDiskGb"] !== null) {
            if(is_bool($param["DataDiskGb"])){
                $this->RequestParams["DataDiskGb"] = $param["DataDiskGb"] ? "true" : "false";
            } else {
                $this->RequestParams["DataDiskGb"] = $param["DataDiskGb"];
            }
        }
        if (array_key_exists("InstanceConfigure_DataDiskGb",$param) and $param["InstanceConfigure_DataDiskGb"] !== null) {
            if(is_bool($param["InstanceConfigure_DataDiskGb"])){
                $this->RequestParams["InstanceConfigure_DataDiskGb"] = $param["InstanceConfigure_DataDiskGb"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceConfigure_DataDiskGb"] = $param["InstanceConfigure_DataDiskGb"];
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
        if (array_key_exists("InstanceConfigure_Gpu",$param) and $param["InstanceConfigure_Gpu"] !== null) {
            if(is_bool($param["InstanceConfigure_Gpu"])){
                $this->RequestParams["InstanceConfigure_Gpu"] = $param["InstanceConfigure_Gpu"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceConfigure_Gpu"] = $param["InstanceConfigure_Gpu"];
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