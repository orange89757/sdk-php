<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class QueryMaxBootNumRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "ProductType" => null,
         /**String**/
        "AvailabilityZone" => null,
         /**Int**/
        "IsDataDiskSnapshotBoot" => null,
         /**Int**/
        "IsBindingEbsDataDisk" => null,
         /**Int**/
        "IsCustomImageBoot" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            if(is_bool($param["ProductType"])){
                $this->RequestParams["ProductType"] = $param["ProductType"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductType"] = $param["ProductType"];
            }
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("IsDataDiskSnapshotBoot",$param) and $param["IsDataDiskSnapshotBoot"] !== null) {
            if(is_bool($param["IsDataDiskSnapshotBoot"])){
                $this->RequestParams["IsDataDiskSnapshotBoot"] = $param["IsDataDiskSnapshotBoot"] ? "true" : "false";
            } else {
                $this->RequestParams["IsDataDiskSnapshotBoot"] = $param["IsDataDiskSnapshotBoot"];
            }
        }
        if (array_key_exists("IsBindingEbsDataDisk",$param) and $param["IsBindingEbsDataDisk"] !== null) {
            if(is_bool($param["IsBindingEbsDataDisk"])){
                $this->RequestParams["IsBindingEbsDataDisk"] = $param["IsBindingEbsDataDisk"] ? "true" : "false";
            } else {
                $this->RequestParams["IsBindingEbsDataDisk"] = $param["IsBindingEbsDataDisk"];
            }
        }
        if (array_key_exists("IsCustomImageBoot",$param) and $param["IsCustomImageBoot"] !== null) {
            if(is_bool($param["IsCustomImageBoot"])){
                $this->RequestParams["IsCustomImageBoot"] = $param["IsCustomImageBoot"] ? "true" : "false";
            } else {
                $this->RequestParams["IsCustomImageBoot"] = $param["IsCustomImageBoot"];
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