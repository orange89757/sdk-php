<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class SaveUserSsoConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "Status" => null,
         /**String**/
        "MetaData" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            if(is_bool($param["Status"])){
                $this->RequestParams["Status"] = $param["Status"] ? "true" : "false";
            } else {
                $this->RequestParams["Status"] = $param["Status"];
            }
        }
        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            if(is_bool($param["MetaData"])){
                $this->RequestParams["MetaData"] = $param["MetaData"] ? "true" : "false";
            } else {
                $this->RequestParams["MetaData"] = $param["MetaData"];
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