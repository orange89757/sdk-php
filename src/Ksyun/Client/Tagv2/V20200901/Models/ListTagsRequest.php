<?php
namespace  Ksyun\Client\Tagv2\V20200901\Models;

use Ksyun\Common\BaseModel;

class ListTagsRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "Page" => null,
         /**Int**/
        "PageSize" => null,
         /**String**/
        "Key" => null,
         /**String**/
        "Value" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            if(is_bool($param["Key"])){
                $this->RequestParams["Key"] = $param["Key"] ? "true" : "false";
            } else {
                $this->RequestParams["Key"] = $param["Key"];
            }
        }
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            if(is_bool($param["Value"])){
                $this->RequestParams["Value"] = $param["Value"] ? "true" : "false";
            } else {
                $this->RequestParams["Value"] = $param["Value"];
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