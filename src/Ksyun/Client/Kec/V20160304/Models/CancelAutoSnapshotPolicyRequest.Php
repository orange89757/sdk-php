<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CancelAutoSnapshotPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Action" => null,
         /**String**/
        "AutoSnapshotPolicyId" => null,
         /**String**/
        "AttachVolumeId" => null,
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
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            if(is_bool($param["AutoSnapshotPolicyId"])){
                $this->RequestParams["AutoSnapshotPolicyId"] = $param["AutoSnapshotPolicyId"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoSnapshotPolicyId"] = $param["AutoSnapshotPolicyId"];
            }
        }
        if (array_key_exists("AttachVolumeId",$param) and $param["AttachVolumeId"] !== null) {
            if(is_bool($param["AttachVolumeId"])){
                $this->RequestParams["AttachVolumeId"] = $param["AttachVolumeId"] ? "true" : "false";
            } else {
                $this->RequestParams["AttachVolumeId"] = $param["AttachVolumeId"];
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