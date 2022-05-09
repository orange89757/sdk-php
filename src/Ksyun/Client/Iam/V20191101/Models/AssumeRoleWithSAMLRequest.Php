<?php
namespace  Ksyun\Client\Iam\V20191101\Models;

use Ksyun\Common\BaseModel;

class AssumeRoleWithSAMLRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "RoleKrn" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RoleKrn",$param) and $param["RoleKrn"] !== null) {
            if(is_bool($param["RoleKrn"])){
                $this->RequestParams["RoleKrn"] = $param["RoleKrn"] ? "true" : "false";
            } else {
                $this->RequestParams["RoleKrn"] = $param["RoleKrn"];
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