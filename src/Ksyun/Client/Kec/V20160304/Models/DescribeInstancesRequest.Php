<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**Int**/
        "ProjectId" => null,
         /**Int**/
        "Marker" => null,
         /**Int**/
        "MaxResults" => null,
         /**String**/
        "Filter_instance-id" => null,
         /**String**/
        "Filter_subnet-id" => null,
         /**String**/
        "Filter_vpc-id" => null,
         /**String**/
        "Filter_network-interface_subnet-id" => null,
         /**String**/
        "Filter_network-interface_network-interface-id" => null,
         /**String**/
        "Filter_network-interface_group-id" => null,
         /**String**/
        "Filter_instance-state_name" => null,
         /**String**/
        "Sort_Name" => null,
         /**String**/
        "Sort_Value" => null,
         /**String**/
        "Search" => null,
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            if(is_bool($param["Marker"])){
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            if(is_bool($param["MaxResults"])){
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
            }
        }
        if (array_key_exists("Filter_instance-id",$param) and $param["Filter_instance-id"] !== null) {
            if(is_bool($param["Filter_instance-id"])){
                $this->RequestParams["Filter_instance-id"] = $param["Filter_instance-id"] ? "true" : "false";
            } else {
                $this->RequestParams["Filter_instance-id"] = $param["Filter_instance-id"];
            }
        }
        if (array_key_exists("Filter_subnet-id",$param) and $param["Filter_subnet-id"] !== null) {
            if(is_bool($param["Filter_subnet-id"])){
                $this->RequestParams["Filter_subnet-id"] = $param["Filter_subnet-id"] ? "true" : "false";
            } else {
                $this->RequestParams["Filter_subnet-id"] = $param["Filter_subnet-id"];
            }
        }
        if (array_key_exists("Filter_vpc-id",$param) and $param["Filter_vpc-id"] !== null) {
            if(is_bool($param["Filter_vpc-id"])){
                $this->RequestParams["Filter_vpc-id"] = $param["Filter_vpc-id"] ? "true" : "false";
            } else {
                $this->RequestParams["Filter_vpc-id"] = $param["Filter_vpc-id"];
            }
        }
        if (array_key_exists("Filter_network-interface_subnet-id",$param) and $param["Filter_network-interface_subnet-id"] !== null) {
            if(is_bool($param["Filter_network-interface_subnet-id"])){
                $this->RequestParams["Filter_network-interface_subnet-id"] = $param["Filter_network-interface_subnet-id"] ? "true" : "false";
            } else {
                $this->RequestParams["Filter_network-interface_subnet-id"] = $param["Filter_network-interface_subnet-id"];
            }
        }
        if (array_key_exists("Filter_network-interface_network-interface-id",$param) and $param["Filter_network-interface_network-interface-id"] !== null) {
            if(is_bool($param["Filter_network-interface_network-interface-id"])){
                $this->RequestParams["Filter_network-interface_network-interface-id"] = $param["Filter_network-interface_network-interface-id"] ? "true" : "false";
            } else {
                $this->RequestParams["Filter_network-interface_network-interface-id"] = $param["Filter_network-interface_network-interface-id"];
            }
        }
        if (array_key_exists("Filter_network-interface_group-id",$param) and $param["Filter_network-interface_group-id"] !== null) {
            if(is_bool($param["Filter_network-interface_group-id"])){
                $this->RequestParams["Filter_network-interface_group-id"] = $param["Filter_network-interface_group-id"] ? "true" : "false";
            } else {
                $this->RequestParams["Filter_network-interface_group-id"] = $param["Filter_network-interface_group-id"];
            }
        }
        if (array_key_exists("Filter_instance-state_name",$param) and $param["Filter_instance-state_name"] !== null) {
            if(is_bool($param["Filter_instance-state_name"])){
                $this->RequestParams["Filter_instance-state_name"] = $param["Filter_instance-state_name"] ? "true" : "false";
            } else {
                $this->RequestParams["Filter_instance-state_name"] = $param["Filter_instance-state_name"];
            }
        }
        if (array_key_exists("Sort_Name",$param) and $param["Sort_Name"] !== null) {
            if(is_bool($param["Sort_Name"])){
                $this->RequestParams["Sort_Name"] = $param["Sort_Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Sort_Name"] = $param["Sort_Name"];
            }
        }
        if (array_key_exists("Sort_Value",$param) and $param["Sort_Value"] !== null) {
            if(is_bool($param["Sort_Value"])){
                $this->RequestParams["Sort_Value"] = $param["Sort_Value"] ? "true" : "false";
            } else {
                $this->RequestParams["Sort_Value"] = $param["Sort_Value"];
            }
        }
        if (array_key_exists("Search",$param) and $param["Search"] !== null) {
            if(is_bool($param["Search"])){
                $this->RequestParams["Search"] = $param["Search"] ? "true" : "false";
            } else {
                $this->RequestParams["Search"] = $param["Search"];
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