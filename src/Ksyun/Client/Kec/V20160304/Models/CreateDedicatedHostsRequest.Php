<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateDedicatedHostsRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "ProjectId" => null,
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "DedicatedType" => null,
         /**Int**/
        "Number" => null,
         /**String**/
        "Name" => null,
         /**Int**/
        "InstanceNameSuffix" => null,
         /**String**/
        "ClusterName" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("DedicatedType",$param) and $param["DedicatedType"] !== null) {
            if(is_bool($param["DedicatedType"])){
                $this->RequestParams["DedicatedType"] = $param["DedicatedType"] ? "true" : "false";
            } else {
                $this->RequestParams["DedicatedType"] = $param["DedicatedType"];
            }
        }
        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            if(is_bool($param["Number"])){
                $this->RequestParams["Number"] = $param["Number"] ? "true" : "false";
            } else {
                $this->RequestParams["Number"] = $param["Number"];
            }
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("InstanceNameSuffix",$param) and $param["InstanceNameSuffix"] !== null) {
            if(is_bool($param["InstanceNameSuffix"])){
                $this->RequestParams["InstanceNameSuffix"] = $param["InstanceNameSuffix"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceNameSuffix"] = $param["InstanceNameSuffix"];
            }
        }
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            if(is_bool($param["ClusterName"])){
                $this->RequestParams["ClusterName"] = $param["ClusterName"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterName"] = $param["ClusterName"];
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