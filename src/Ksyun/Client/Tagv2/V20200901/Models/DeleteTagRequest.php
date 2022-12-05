<?php
namespace  Ksyun\Client\Tagv2\V20200901\Models;

use Ksyun\Common\BaseModel;

class DeleteTagRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "Tags" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            if(is_bool($param["Tags"])){
                $this->RequestParams["Tags"] = $param["Tags"] ? "true" : "false";
            } else {
                $this->RequestParams["Tags"] = $param["Tags"];
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