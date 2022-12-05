<?php
namespace  Ksyun\Client\Tagv2\V20200901\Models;

use Ksyun\Common\BaseModel;

class DetachResourceTagsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ResourceType" => null,
         /**String**/
        "ResourceUuid" => null,
         /**String**/
        "TagIds" => null,
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
        if (array_key_exists("ResourceUuid",$param) and $param["ResourceUuid"] !== null) {
            if(is_bool($param["ResourceUuid"])){
                $this->RequestParams["ResourceUuid"] = $param["ResourceUuid"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceUuid"] = $param["ResourceUuid"];
            }
        }
        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            if(is_bool($param["TagIds"])){
                $this->RequestParams["TagIds"] = $param["TagIds"] ? "true" : "false";
            } else {
                $this->RequestParams["TagIds"] = $param["TagIds"];
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