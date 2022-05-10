<?php
namespace  Ksyun\Client\Rg\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteRouteRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "RouteId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            if(is_bool($param["RouteId"])){
                $this->RequestParams["RouteId"] = $param["RouteId"] ? "true" : "false";
            } else {
                $this->RequestParams["RouteId"] = $param["RouteId"];
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