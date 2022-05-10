<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeDataGuardGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DataGuardId" => null,
         /**String**/
        "DataGuardName" => null,
         /**String**/
        "SortKey" => null,
         /**String**/
        "SortDir" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DataGuardId",$param) and $param["DataGuardId"] !== null) {
            if(is_bool($param["DataGuardId"])){
                $this->RequestParams["DataGuardId"] = $param["DataGuardId"] ? "true" : "false";
            } else {
                $this->RequestParams["DataGuardId"] = $param["DataGuardId"];
            }
        }
        if (array_key_exists("DataGuardName",$param) and $param["DataGuardName"] !== null) {
            if(is_bool($param["DataGuardName"])){
                $this->RequestParams["DataGuardName"] = $param["DataGuardName"] ? "true" : "false";
            } else {
                $this->RequestParams["DataGuardName"] = $param["DataGuardName"];
            }
        }
        if (array_key_exists("SortKey",$param) and $param["SortKey"] !== null) {
            if(is_bool($param["SortKey"])){
                $this->RequestParams["SortKey"] = $param["SortKey"] ? "true" : "false";
            } else {
                $this->RequestParams["SortKey"] = $param["SortKey"];
            }
        }
        if (array_key_exists("SortDir",$param) and $param["SortDir"] !== null) {
            if(is_bool($param["SortDir"])){
                $this->RequestParams["SortDir"] = $param["SortDir"] ? "true" : "false";
            } else {
                $this->RequestParams["SortDir"] = $param["SortDir"];
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