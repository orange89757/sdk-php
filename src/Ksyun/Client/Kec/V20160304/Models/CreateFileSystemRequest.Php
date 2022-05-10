<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateFileSystemRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "VpcId" => null,
         /**String**/
        "StorageType" => null,
         /**String**/
        "ProtocolType" => null,
         /**String**/
        "FileSystemName" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            if(is_bool($param["StorageType"])){
                $this->RequestParams["StorageType"] = $param["StorageType"] ? "true" : "false";
            } else {
                $this->RequestParams["StorageType"] = $param["StorageType"];
            }
        }
        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            if(is_bool($param["ProtocolType"])){
                $this->RequestParams["ProtocolType"] = $param["ProtocolType"] ? "true" : "false";
            } else {
                $this->RequestParams["ProtocolType"] = $param["ProtocolType"];
            }
        }
        if (array_key_exists("FileSystemName",$param) and $param["FileSystemName"] !== null) {
            if(is_bool($param["FileSystemName"])){
                $this->RequestParams["FileSystemName"] = $param["FileSystemName"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemName"] = $param["FileSystemName"];
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