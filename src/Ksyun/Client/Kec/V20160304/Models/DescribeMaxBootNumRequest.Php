<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeMaxBootNumRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "productType" => null,
         /**String**/
        "availabilityZone" => null,
         /**Int**/
        "isDataDiskSnapshotBoot" => null,
         /**Int**/
        "isBindingEbsDataDisk" => null,
         /**Int**/
        "isCustomImageBoot" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("productType",$param) and $param["productType"] !== null) {
            if(is_bool($param["productType"])){
                $this->RequestParams["productType"] = $param["productType"] ? "true" : "false";
            } else {
                $this->RequestParams["productType"] = $param["productType"];
            }
        }
        if (array_key_exists("availabilityZone",$param) and $param["availabilityZone"] !== null) {
            if(is_bool($param["availabilityZone"])){
                $this->RequestParams["availabilityZone"] = $param["availabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["availabilityZone"] = $param["availabilityZone"];
            }
        }
        if (array_key_exists("isDataDiskSnapshotBoot",$param) and $param["isDataDiskSnapshotBoot"] !== null) {
            if(is_bool($param["isDataDiskSnapshotBoot"])){
                $this->RequestParams["isDataDiskSnapshotBoot"] = $param["isDataDiskSnapshotBoot"] ? "true" : "false";
            } else {
                $this->RequestParams["isDataDiskSnapshotBoot"] = $param["isDataDiskSnapshotBoot"];
            }
        }
        if (array_key_exists("isBindingEbsDataDisk",$param) and $param["isBindingEbsDataDisk"] !== null) {
            if(is_bool($param["isBindingEbsDataDisk"])){
                $this->RequestParams["isBindingEbsDataDisk"] = $param["isBindingEbsDataDisk"] ? "true" : "false";
            } else {
                $this->RequestParams["isBindingEbsDataDisk"] = $param["isBindingEbsDataDisk"];
            }
        }
        if (array_key_exists("isCustomImageBoot",$param) and $param["isCustomImageBoot"] !== null) {
            if(is_bool($param["isCustomImageBoot"])){
                $this->RequestParams["isCustomImageBoot"] = $param["isCustomImageBoot"] ? "true" : "false";
            } else {
                $this->RequestParams["isCustomImageBoot"] = $param["isCustomImageBoot"];
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