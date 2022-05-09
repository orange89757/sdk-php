<?php
namespace  Ksyun\Client\Iam\V20190701\Models;

use Ksyun\Common\BaseModel;

class DelApiTestRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Action" => null,
         /**String**/
        "Version" => null,
         /**Int**/
        "RoleId" => null,
         /**String**/
        "PId" => null,
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            if(is_bool($param["Version"])){
                $this->RequestParams["Version"] = $param["Version"] ? "true" : "false";
            } else {
                $this->RequestParams["Version"] = $param["Version"];
            }
        }
        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            if(is_bool($param["RoleId"])){
                $this->RequestParams["RoleId"] = $param["RoleId"] ? "true" : "false";
            } else {
                $this->RequestParams["RoleId"] = $param["RoleId"];
            }
        }
        if (array_key_exists("PId",$param) and $param["PId"] !== null) {
            if(is_bool($param["PId"])){
                $this->RequestParams["PId"] = $param["PId"] ? "true" : "false";
            } else {
                $this->RequestParams["PId"] = $param["PId"];
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