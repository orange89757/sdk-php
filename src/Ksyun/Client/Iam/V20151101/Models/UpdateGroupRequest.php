<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class UpdateGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "GroupName" => null,
         /**String**/
        "NewGroupName" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            if(is_bool($param["GroupName"])){
                $this->RequestParams["GroupName"] = $param["GroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["GroupName"] = $param["GroupName"];
            }
        }
        if (array_key_exists("NewGroupName",$param) and $param["NewGroupName"] !== null) {
            if(is_bool($param["NewGroupName"])){
                $this->RequestParams["NewGroupName"] = $param["NewGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["NewGroupName"] = $param["NewGroupName"];
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