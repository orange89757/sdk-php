<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class SetMemberViewAllProjectRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Action" => null,
         /**String**/
        "UserName" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            if(is_bool($param["Action"])){
                $this->RequestParams["Action"] = $param["Action"] ? "true" : "false";
            } else {
                $this->RequestParams["Action"] = $param["Action"];
            }
        }
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            if(is_bool($param["UserName"])){
                $this->RequestParams["UserName"] = $param["UserName"] ? "true" : "false";
            } else {
                $this->RequestParams["UserName"] = $param["UserName"];
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