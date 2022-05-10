<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteScalingConfigurationRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ScalingConfigurationId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ScalingConfigurationId",$param) and $param["ScalingConfigurationId"] !== null) {
            if(is_bool($param["ScalingConfigurationId"])){
                $this->RequestParams["ScalingConfigurationId"] = $param["ScalingConfigurationId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingConfigurationId"] = $param["ScalingConfigurationId"];
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