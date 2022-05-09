<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "Region" => null,
         /**String**/
        "IamProjectId" => null,
         /**String**/
        "InstanceName" => null,
         /**String**/
        "ProductGroup" => null,
         /**String**/
        "ProductLine" => null,
         /**String**/
        "Page" => null,
         /**String**/
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            if(is_bool($param["Region"])){
                $this->RequestParams["Region"] = $param["Region"] ? "true" : "false";
            } else {
                $this->RequestParams["Region"] = $param["Region"];
            }
        }
        if (array_key_exists("IamProjectId",$param) and $param["IamProjectId"] !== null) {
            if(is_bool($param["IamProjectId"])){
                $this->RequestParams["IamProjectId"] = $param["IamProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["IamProjectId"] = $param["IamProjectId"];
            }
        }
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            if(is_bool($param["InstanceName"])){
                $this->RequestParams["InstanceName"] = $param["InstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceName"] = $param["InstanceName"];
            }
        }
        if (array_key_exists("ProductGroup",$param) and $param["ProductGroup"] !== null) {
            if(is_bool($param["ProductGroup"])){
                $this->RequestParams["ProductGroup"] = $param["ProductGroup"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductGroup"] = $param["ProductGroup"];
            }
        }
        if (array_key_exists("ProductLine",$param) and $param["ProductLine"] !== null) {
            if(is_bool($param["ProductLine"])){
                $this->RequestParams["ProductLine"] = $param["ProductLine"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductLine"] = $param["ProductLine"];
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