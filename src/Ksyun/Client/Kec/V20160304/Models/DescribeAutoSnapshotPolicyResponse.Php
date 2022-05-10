<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeAutoSnapshotPolicyResponse extends BaseModel
{
         /** RequestID**/
         public  $RequestID;

         /** 查询结果**/
         public  $Return;

         /** 策略个数**/
         public  $AutoSnapshotPolicySize;

         /** 自动快照策略信息**/
         public  $AutoSnapshotPolicySet;

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
            if (array_key_exists("AutoSnapshotPolicySize",$param) and $param["AutoSnapshotPolicySize"] !== null) {
                $this->AutoSnapshotPolicySize = $param["AutoSnapshotPolicySize"];
            }
            if (array_key_exists("AutoSnapshotPolicySet",$param) and $param["AutoSnapshotPolicySet"] !== null) {
                $this->AutoSnapshotPolicySet = $param["AutoSnapshotPolicySet"];
            }

        }
}