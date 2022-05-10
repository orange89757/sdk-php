<?php
namespace  Ksyun\Client\Resourcemanager\V20210320\Models;

use Ksyun\Common\BaseModel;

class ListFoldersRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "users" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("users",$param) and $param["users"] !== null) {
            if(is_bool($param["users"])){
                $this->RequestParams["users"] = $param["users"] ? "true" : "false";
            } else {
                $this->RequestParams["users"] = $param["users"];
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