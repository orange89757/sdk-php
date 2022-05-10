<?php
namespace  Ksyun\Client\Resourcemanager\V20210320\Models;

use Ksyun\Common\BaseModel;

class ListAccountsForParentRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FolderId" => null,
         /**String**/
        "Search" => null,
         /**Int**/
        "Page" => null,
         /**Int**/
        "PageSize" => null,
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
        if (array_key_exists("Search",$param) and $param["Search"] !== null) {
            if(is_bool($param["Search"])){
                $this->RequestParams["Search"] = $param["Search"] ? "true" : "false";
            } else {
                $this->RequestParams["Search"] = $param["Search"];
            }
        }
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            if(is_bool($param["Page"])){
                $this->RequestParams["Page"] = $param["Page"] ? "true" : "false";
            } else {
                $this->RequestParams["Page"] = $param["Page"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
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