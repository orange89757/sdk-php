<?php
namespace  Ksyun\Client\Tagv2\V20200901\Models;

use Ksyun\Common\BaseModel;

class ListResourcesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ResourceType" => null,
         /**String**/
        "ProjectIds" => null,
         /**String**/
        "RegionCodes" => null,
         /**String**/
        "ResourceUuids" => null,
         /**String**/
        "ResourceName" => null,
         /**Array**/
        "TagFilters" => null,
         /**Int**/
        "Page" => null,
         /**Int**/
        "PageSize" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            if(is_bool($param["ResourceType"])){
                $this->RequestParams["ResourceType"] = $param["ResourceType"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceType"] = $param["ResourceType"];
            }
        }
        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            if(is_bool($param["ProjectIds"])){
                $this->RequestParams["ProjectIds"] = $param["ProjectIds"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectIds"] = $param["ProjectIds"];
            }
        }
        if (array_key_exists("RegionCodes",$param) and $param["RegionCodes"] !== null) {
            if(is_bool($param["RegionCodes"])){
                $this->RequestParams["RegionCodes"] = $param["RegionCodes"] ? "true" : "false";
            } else {
                $this->RequestParams["RegionCodes"] = $param["RegionCodes"];
            }
        }
        if (array_key_exists("ResourceUuids",$param) and $param["ResourceUuids"] !== null) {
            if(is_bool($param["ResourceUuids"])){
                $this->RequestParams["ResourceUuids"] = $param["ResourceUuids"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceUuids"] = $param["ResourceUuids"];
            }
        }
        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            if(is_bool($param["ResourceName"])){
                $this->RequestParams["ResourceName"] = $param["ResourceName"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceName"] = $param["ResourceName"];
            }
        }
        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            if(is_bool($param["TagFilters"])){
                $this->RequestParams["TagFilters"] = $param["TagFilters"] ? "true" : "false";
            } else {
                $this->RequestParams["TagFilters"] = $param["TagFilters"];
            }
        }
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            if(is_bool($param["Page"])){
                $this->RequestParams["Page"] = $param["Page"] ? "true" : "false";
            } else {
                $this->RequestParams["Page"] = $param["Page"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
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