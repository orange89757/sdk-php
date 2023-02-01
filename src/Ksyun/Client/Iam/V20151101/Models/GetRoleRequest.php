<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetRoleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "RoleName" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            if(is_bool($param["RoleName"])){
                $this->RequestParams["RoleName"] = $param["RoleName"] ? "true" : "false";
            } else {
                $this->RequestParams["RoleName"] = $param["RoleName"];
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