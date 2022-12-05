<?php
namespace  Ksyun\Client\Tagv2\V20200901\Models;

use Ksyun\Common\BaseModel;

class ReplaceResourcesTagsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ResourceType" => null,
         /**Array**/
        "ReplaceTags" => null,
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
        if (array_key_exists("ReplaceTags",$param) and $param["ReplaceTags"] !== null) {
            if(is_bool($param["ReplaceTags"])){
                $this->RequestParams["ReplaceTags"] = $param["ReplaceTags"] ? "true" : "false";
            } else {
                $this->RequestParams["ReplaceTags"] = $param["ReplaceTags"];
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