<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ExportImageRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "imageid" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("imageid",$param) and $param["imageid"] !== null) {
            if(is_bool($param["imageid"])){
                $this->RequestParams["imageid"] = $param["imageid"] ? "true" : "false";
            } else {
                $this->RequestParams["imageid"] = $param["imageid"];
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