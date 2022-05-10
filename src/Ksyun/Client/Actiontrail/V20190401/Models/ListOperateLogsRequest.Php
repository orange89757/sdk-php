<?php
namespace  Ksyun\Client\Actiontrail\V20190401\Models;

use Ksyun\Common\BaseModel;

class ListOperateLogsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "EventName" => null,
         /**String**/
        "EventRw" => null,
         /**String**/
        "UserName" => null,
         /**String**/
        "AccessKey" => null,
         /**String**/
        "EventBeginDate" => null,
         /**String**/
        "EventEndDate" => null,
         /**String**/
        "ResourceType" => null,
         /**String**/
        "ResourceName" => null,
         /**String**/
        "Page" => null,
         /**String**/
        "PageSize" => null,
         /**String**/
        "SearchAfter" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            if(is_bool($param["EventName"])){
                $this->RequestParams["EventName"] = $param["EventName"] ? "true" : "false";
            } else {
                $this->RequestParams["EventName"] = $param["EventName"];
            }
        }
        if (array_key_exists("EventRw",$param) and $param["EventRw"] !== null) {
            if(is_bool($param["EventRw"])){
                $this->RequestParams["EventRw"] = $param["EventRw"] ? "true" : "false";
            } else {
                $this->RequestParams["EventRw"] = $param["EventRw"];
            }
        }
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            if(is_bool($param["UserName"])){
                $this->RequestParams["UserName"] = $param["UserName"] ? "true" : "false";
            } else {
                $this->RequestParams["UserName"] = $param["UserName"];
            }
        }
        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            if(is_bool($param["AccessKey"])){
                $this->RequestParams["AccessKey"] = $param["AccessKey"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessKey"] = $param["AccessKey"];
            }
        }
        if (array_key_exists("EventBeginDate",$param) and $param["EventBeginDate"] !== null) {
            if(is_bool($param["EventBeginDate"])){
                $this->RequestParams["EventBeginDate"] = $param["EventBeginDate"] ? "true" : "false";
            } else {
                $this->RequestParams["EventBeginDate"] = $param["EventBeginDate"];
            }
        }
        if (array_key_exists("EventEndDate",$param) and $param["EventEndDate"] !== null) {
            if(is_bool($param["EventEndDate"])){
                $this->RequestParams["EventEndDate"] = $param["EventEndDate"] ? "true" : "false";
            } else {
                $this->RequestParams["EventEndDate"] = $param["EventEndDate"];
            }
        }
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            if(is_bool($param["ResourceType"])){
                $this->RequestParams["ResourceType"] = $param["ResourceType"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceType"] = $param["ResourceType"];
            }
        }
        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            if(is_bool($param["ResourceName"])){
                $this->RequestParams["ResourceName"] = $param["ResourceName"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceName"] = $param["ResourceName"];
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
        if (array_key_exists("SearchAfter",$param) and $param["SearchAfter"] !== null) {
            if(is_bool($param["SearchAfter"])){
                $this->RequestParams["SearchAfter"] = $param["SearchAfter"] ? "true" : "false";
            } else {
                $this->RequestParams["SearchAfter"] = $param["SearchAfter"];
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