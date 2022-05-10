<?php
namespace  Ksyun\Client\Resourcemanager\V20210320\Models;

use Ksyun\Common\BaseModel;

class UpdateAccountRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "MemberId" => null,
         /**String**/
        "NewDisplayName" => null,
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            if(is_bool($param["MemberId"])){
                $this->RequestParams["MemberId"] = $param["MemberId"] ? "true" : "false";
            } else {
                $this->RequestParams["MemberId"] = $param["MemberId"];
            }
        }
        if (array_key_exists("NewDisplayName",$param) and $param["NewDisplayName"] !== null) {
            if(is_bool($param["NewDisplayName"])){
                $this->RequestParams["NewDisplayName"] = $param["NewDisplayName"] ? "true" : "false";
            } else {
                $this->RequestParams["NewDisplayName"] = $param["NewDisplayName"];
            }
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