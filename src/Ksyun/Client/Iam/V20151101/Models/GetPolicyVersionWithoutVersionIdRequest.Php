<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetPolicyVersionWithoutVersionIdRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PolicyKrn" => null,
         /**Int**/
        "AccountId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PolicyKrn",$param) and $param["PolicyKrn"] !== null) {
            if(is_bool($param["PolicyKrn"])){
                $this->RequestParams["PolicyKrn"] = $param["PolicyKrn"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyKrn"] = $param["PolicyKrn"];
            }
        }
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            if(is_bool($param["AccountId"])){
                $this->RequestParams["AccountId"] = $param["AccountId"] ? "true" : "false";
            } else {
                $this->RequestParams["AccountId"] = $param["AccountId"];
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