<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeWhiteUsersRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "whiteUserId" => null,
         /**String**/
        "supportType" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("whiteUserId",$param) and $param["whiteUserId"] !== null) {
            if(is_bool($param["whiteUserId"])){
                $this->RequestParams["whiteUserId"] = $param["whiteUserId"] ? "true" : "false";
            } else {
                $this->RequestParams["whiteUserId"] = $param["whiteUserId"];
            }
        }
        if (array_key_exists("supportType",$param) and $param["supportType"] !== null) {
            if(is_bool($param["supportType"])){
                $this->RequestParams["supportType"] = $param["supportType"] ? "true" : "false";
            } else {
                $this->RequestParams["supportType"] = $param["supportType"];
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