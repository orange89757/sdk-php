<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateAutoSnapshotPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Action" => null,
         /**String**/
        "AutoSnapshotPolicyName" => null,
         /**String**/
        "AutoSnapshotTime" => null,
         /**String**/
        "AutoSnapshotDate" => null,
         /**String**/
        "AzCode" => null,
         /**String**/
        "Description" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            if(is_bool($param["Action"])){
                $this->RequestParams["Action"] = $param["Action"] ? "true" : "false";
            } else {
                $this->RequestParams["Action"] = $param["Action"];
            }
        }
        if (array_key_exists("AutoSnapshotPolicyName",$param) and $param["AutoSnapshotPolicyName"] !== null) {
            if(is_bool($param["AutoSnapshotPolicyName"])){
                $this->RequestParams["AutoSnapshotPolicyName"] = $param["AutoSnapshotPolicyName"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoSnapshotPolicyName"] = $param["AutoSnapshotPolicyName"];
            }
        }
        if (array_key_exists("AutoSnapshotTime",$param) and $param["AutoSnapshotTime"] !== null) {
            if(is_bool($param["AutoSnapshotTime"])){
                $this->RequestParams["AutoSnapshotTime"] = $param["AutoSnapshotTime"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoSnapshotTime"] = $param["AutoSnapshotTime"];
            }
        }
        if (array_key_exists("AutoSnapshotDate",$param) and $param["AutoSnapshotDate"] !== null) {
            if(is_bool($param["AutoSnapshotDate"])){
                $this->RequestParams["AutoSnapshotDate"] = $param["AutoSnapshotDate"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoSnapshotDate"] = $param["AutoSnapshotDate"];
            }
        }
        if (array_key_exists("AzCode",$param) and $param["AzCode"] !== null) {
            if(is_bool($param["AzCode"])){
                $this->RequestParams["AzCode"] = $param["AzCode"] ? "true" : "false";
            } else {
                $this->RequestParams["AzCode"] = $param["AzCode"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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