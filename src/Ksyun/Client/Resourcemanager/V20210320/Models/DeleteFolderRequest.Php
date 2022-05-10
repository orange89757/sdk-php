<?php
namespace  Ksyun\Client\Resourcemanager\V20210320\Models;

use Ksyun\Common\BaseModel;

class DeleteFolderRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FolderId" => null,
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