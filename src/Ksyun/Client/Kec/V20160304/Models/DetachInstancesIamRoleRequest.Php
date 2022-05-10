<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DetachInstancesIamRoleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "IamRoleName" => null,
         /**String**/
        "InstanceId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("IamRoleName",$param) and $param["IamRoleName"] !== null) {
            if(is_bool($param["IamRoleName"])){
                $this->RequestParams["IamRoleName"] = $param["IamRoleName"] ? "true" : "false";
            } else {
                $this->RequestParams["IamRoleName"] = $param["IamRoleName"];
            }
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
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