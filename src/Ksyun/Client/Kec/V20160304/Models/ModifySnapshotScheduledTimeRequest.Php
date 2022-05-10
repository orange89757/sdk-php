<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifySnapshotScheduledTimeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ModifySnapshotScheduledTime" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ModifySnapshotScheduledTime",$param) and $param["ModifySnapshotScheduledTime"] !== null) {
            if(is_bool($param["ModifySnapshotScheduledTime"])){
                $this->RequestParams["ModifySnapshotScheduledTime"] = $param["ModifySnapshotScheduledTime"] ? "true" : "false";
            } else {
                $this->RequestParams["ModifySnapshotScheduledTime"] = $param["ModifySnapshotScheduledTime"];
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