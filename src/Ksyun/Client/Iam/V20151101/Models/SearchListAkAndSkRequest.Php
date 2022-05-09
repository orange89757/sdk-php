<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class SearchListAkAndSkRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AccessKey" => null,
         /**Int**/
        "AccountId" => null,
         /**Int**/
        "UserName" => null,
         /**Int**/
        "PageNum" => null,
         /**Int**/
        "PageSize" => null,
         /**String**/
        "Action" => null,
         /**String**/
        "Version" => null,
         /**Int**/
        "SearchAccountId" => null,
         /**String**/
        "RootUsername" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            if(is_bool($param["AccessKey"])){
                $this->RequestParams["AccessKey"] = $param["AccessKey"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessKey"] = $param["AccessKey"];
            }
        }
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            if(is_bool($param["AccountId"])){
                $this->RequestParams["AccountId"] = $param["AccountId"] ? "true" : "false";
            } else {
                $this->RequestParams["AccountId"] = $param["AccountId"];
            }
        }
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            if(is_bool($param["UserName"])){
                $this->RequestParams["UserName"] = $param["UserName"] ? "true" : "false";
            } else {
                $this->RequestParams["UserName"] = $param["UserName"];
            }
        }
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            if(is_bool($param["PageNum"])){
                $this->RequestParams["PageNum"] = $param["PageNum"] ? "true" : "false";
            } else {
                $this->RequestParams["PageNum"] = $param["PageNum"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
            }
        }
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            if(is_bool($param["Action"])){
                $this->RequestParams["Action"] = $param["Action"] ? "true" : "false";
            } else {
                $this->RequestParams["Action"] = $param["Action"];
            }
        }
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            if(is_bool($param["Version"])){
                $this->RequestParams["Version"] = $param["Version"] ? "true" : "false";
            } else {
                $this->RequestParams["Version"] = $param["Version"];
            }
        }
        if (array_key_exists("SearchAccountId",$param) and $param["SearchAccountId"] !== null) {
            if(is_bool($param["SearchAccountId"])){
                $this->RequestParams["SearchAccountId"] = $param["SearchAccountId"] ? "true" : "false";
            } else {
                $this->RequestParams["SearchAccountId"] = $param["SearchAccountId"];
            }
        }
        if (array_key_exists("RootUsername",$param) and $param["RootUsername"] !== null) {
            if(is_bool($param["RootUsername"])){
                $this->RequestParams["RootUsername"] = $param["RootUsername"] ? "true" : "false";
            } else {
                $this->RequestParams["RootUsername"] = $param["RootUsername"];
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