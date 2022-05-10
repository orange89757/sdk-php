<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CalculatePolicyInVolumeNumResponse extends BaseModel
{
         /** RequestID**/
         public  $RequestID;

         /** 计算结果**/
         public  $Return;

         /** 绑定盘数量**/
         public  $AutoSnapshotPolicyInVolumeNum;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestID",$param) and $param["RequestID"] !== null) {
                $this->RequestID = $param["RequestID"];
            }
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }
            if (array_key_exists("AutoSnapshotPolicyInVolumeNum",$param) and $param["AutoSnapshotPolicyInVolumeNum"] !== null) {
                $this->AutoSnapshotPolicyInVolumeNum = $param["AutoSnapshotPolicyInVolumeNum"];
            }

        }
}