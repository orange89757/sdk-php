<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class DeleteGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "GroupName" => null,
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