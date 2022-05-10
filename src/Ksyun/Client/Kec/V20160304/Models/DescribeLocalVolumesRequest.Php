<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeLocalVolumesRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "MaxResults" => null,
         /**Int**/
        "Marker" => null,
         /**String**/
        "Search" => null,
         /**String**/
        "InstanceName" => null,
         /**String**/
        "InstanceState" => null,
         /**String**/
        "LocalVolumeCategory" => null,
         /**Int**/
        "LocalVolumeSize" => null,
         /**String**/
        "LocalVolumeId" => null,
         /**String**/
        "AutoSnapshotPolicyId" => null,
         /**String**/
        "BindSnapshotPolicy" => null,
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            if(is_bool($param["InstanceName"])){
                $this->RequestParams["InstanceName"] = $param["InstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceName"] = $param["InstanceName"];
            }
        }
        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            if(is_bool($param["InstanceState"])){
                $this->RequestParams["InstanceState"] = $param["InstanceState"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceState"] = $param["InstanceState"];
            }
        }
        if (array_key_exists("LocalVolumeCategory",$param) and $param["LocalVolumeCategory"] !== null) {
            if(is_bool($param["LocalVolumeCategory"])){
                $this->RequestParams["LocalVolumeCategory"] = $param["LocalVolumeCategory"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalVolumeCategory"] = $param["LocalVolumeCategory"];
            }
        }
        if (array_key_exists("LocalVolumeSize",$param) and $param["LocalVolumeSize"] !== null) {
            if(is_bool($param["LocalVolumeSize"])){
                $this->RequestParams["LocalVolumeSize"] = $param["LocalVolumeSize"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalVolumeSize"] = $param["LocalVolumeSize"];
            }
        }
        if (array_key_exists("LocalVolumeId",$param) and $param["LocalVolumeId"] !== null) {
            if(is_bool($param["LocalVolumeId"])){
                $this->RequestParams["LocalVolumeId"] = $param["LocalVolumeId"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalVolumeId"] = $param["LocalVolumeId"];
            }
        }
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            if(is_bool($param["AutoSnapshotPolicyId"])){
                $this->RequestParams["AutoSnapshotPolicyId"] = $param["AutoSnapshotPolicyId"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoSnapshotPolicyId"] = $param["AutoSnapshotPolicyId"];
            }
        }
        if (array_key_exists("BindSnapshotPolicy",$param) and $param["BindSnapshotPolicy"] !== null) {
            if(is_bool($param["BindSnapshotPolicy"])){
                $this->RequestParams["BindSnapshotPolicy"] = $param["BindSnapshotPolicy"] ? "true" : "false";
            } else {
                $this->RequestParams["BindSnapshotPolicy"] = $param["BindSnapshotPolicy"];
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