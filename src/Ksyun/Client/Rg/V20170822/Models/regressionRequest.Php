<?php
namespace  Ksyun\Client\Rg\V20170822\Models;

use Ksyun\Common\BaseModel;

class regressionRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "ProjectId" => null,
         /**String**/
        "InstancePassword" => null,
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
        if (array_key_exists("InstancePassword",$param) and $param["InstancePassword"] !== null) {
            if(is_bool($param["InstancePassword"])){
                $this->RequestParams["InstancePassword"] = $param["InstancePassword"] ? "true" : "false";
            } else {
                $this->RequestParams["InstancePassword"] = $param["InstancePassword"];
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