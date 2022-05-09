<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class BatchAttachResourceDirPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "Users" => null,
         /**Array**/
        "Policies" => null,
         /**Array**/
        "Dirs" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            if(is_bool($param["Users"])){
                $this->RequestParams["Users"] = $param["Users"] ? "true" : "false";
            } else {
                $this->RequestParams["Users"] = $param["Users"];
            }
        }
        if (array_key_exists("Policies",$param) and $param["Policies"] !== null) {
            if(is_bool($param["Policies"])){
                $this->RequestParams["Policies"] = $param["Policies"] ? "true" : "false";
            } else {
                $this->RequestParams["Policies"] = $param["Policies"];
            }
        }
        if (array_key_exists("Dirs",$param) and $param["Dirs"] !== null) {
            if(is_bool($param["Dirs"])){
                $this->RequestParams["Dirs"] = $param["Dirs"] ? "true" : "false";
            } else {
                $this->RequestParams["Dirs"] = $param["Dirs"];
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