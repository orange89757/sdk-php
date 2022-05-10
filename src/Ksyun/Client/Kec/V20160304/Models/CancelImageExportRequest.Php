<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CancelImageExportRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "imageId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("imageId",$param) and $param["imageId"] !== null) {
            if(is_bool($param["imageId"])){
                $this->RequestParams["imageId"] = $param["imageId"] ? "true" : "false";
            } else {
                $this->RequestParams["imageId"] = $param["imageId"];
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