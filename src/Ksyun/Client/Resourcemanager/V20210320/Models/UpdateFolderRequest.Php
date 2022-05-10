<?php
namespace  Ksyun\Client\Resourcemanager\V20210320\Models;

use Ksyun\Common\BaseModel;

class UpdateFolderRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FolderId" => null,
         /**String**/
        "ParentId" => null,
         /**String**/
        "Name" => null,
         /**String**/
        "Desc" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            if(is_bool($param["FolderId"])){
                $this->RequestParams["FolderId"] = $param["FolderId"] ? "true" : "false";
            } else {
                $this->RequestParams["FolderId"] = $param["FolderId"];
            }
        }
        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            if(is_bool($param["ParentId"])){
                $this->RequestParams["ParentId"] = $param["ParentId"] ? "true" : "false";
            } else {
                $this->RequestParams["ParentId"] = $param["ParentId"];
            }
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            if(is_bool($param["Desc"])){
                $this->RequestParams["Desc"] = $param["Desc"] ? "true" : "false";
            } else {
                $this->RequestParams["Desc"] = $param["Desc"];
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