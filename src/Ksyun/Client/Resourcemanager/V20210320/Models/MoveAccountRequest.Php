<?php
namespace  Ksyun\Client\Resourcemanager\V20210320\Models;

use Ksyun\Common\BaseModel;

class MoveAccountRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Ids" => null,
         /**String**/
        "FromFolderId" => null,
         /**String**/
        "ToFolderId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            if(is_bool($param["Ids"])){
                $this->RequestParams["Ids"] = $param["Ids"] ? "true" : "false";
            } else {
                $this->RequestParams["Ids"] = $param["Ids"];
            }
        }
        if (array_key_exists("FromFolderId",$param) and $param["FromFolderId"] !== null) {
            if(is_bool($param["FromFolderId"])){
                $this->RequestParams["FromFolderId"] = $param["FromFolderId"] ? "true" : "false";
            } else {
                $this->RequestParams["FromFolderId"] = $param["FromFolderId"];
            }
        }
        if (array_key_exists("ToFolderId",$param) and $param["ToFolderId"] !== null) {
            if(is_bool($param["ToFolderId"])){
                $this->RequestParams["ToFolderId"] = $param["ToFolderId"] ? "true" : "false";
            } else {
                $this->RequestParams["ToFolderId"] = $param["ToFolderId"];
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