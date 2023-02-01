<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class AddProjectMemberRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "ProjectId" => null,
         /**String**/
        "IdentityId" => null,
         /**Int**/
        "IdentityType" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("IdentityId",$param) and $param["IdentityId"] !== null) {
            if(is_bool($param["IdentityId"])){
                $this->RequestParams["IdentityId"] = $param["IdentityId"] ? "true" : "false";
            } else {
                $this->RequestParams["IdentityId"] = $param["IdentityId"];
            }
        }
        if (array_key_exists("IdentityType",$param) and $param["IdentityType"] !== null) {
            if(is_bool($param["IdentityType"])){
                $this->RequestParams["IdentityType"] = $param["IdentityType"] ? "true" : "false";
            } else {
                $this->RequestParams["IdentityType"] = $param["IdentityType"];
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