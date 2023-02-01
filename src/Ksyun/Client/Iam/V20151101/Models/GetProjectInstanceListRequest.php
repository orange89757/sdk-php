<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetProjectInstanceListRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "ProjectId" => null,
         /**String**/
        "ProductLine" => null,
         /**Int**/
        "Ps" => null,
         /**Int**/
        "Pn" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("ProductLine",$param) and $param["ProductLine"] !== null) {
            if(is_bool($param["ProductLine"])){
                $this->RequestParams["ProductLine"] = $param["ProductLine"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductLine"] = $param["ProductLine"];
            }
        }
        if (array_key_exists("Ps",$param) and $param["Ps"] !== null) {
            if(is_bool($param["Ps"])){
                $this->RequestParams["Ps"] = $param["Ps"] ? "true" : "false";
            } else {
                $this->RequestParams["Ps"] = $param["Ps"];
            }
        }
        if (array_key_exists("Pn",$param) and $param["Pn"] !== null) {
            if(is_bool($param["Pn"])){
                $this->RequestParams["Pn"] = $param["Pn"] ? "true" : "false";
            } else {
                $this->RequestParams["Pn"] = $param["Pn"];
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