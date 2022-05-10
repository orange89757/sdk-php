<?php
namespace  Ksyun\Client\Resourcemanager\V20210320\Models;

use Ksyun\Common\BaseModel;

class ListAccountsRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "PageNumber" => null,
         /**Int**/
        "PageSize" => null,
         /**Int**/
        "IsAll" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            if(is_bool($param["PageNumber"])){
                $this->RequestParams["PageNumber"] = $param["PageNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["PageNumber"] = $param["PageNumber"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
            }
        }
        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            if(is_bool($param["IsAll"])){
                $this->RequestParams["IsAll"] = $param["IsAll"] ? "true" : "false";
            } else {
                $this->RequestParams["IsAll"] = $param["IsAll"];
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