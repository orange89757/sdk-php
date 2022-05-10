<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateAutoSnapshotPolicyResponse extends BaseModel
{
         /** RequestID**/
         public  $RequestID;

         /** 创建结果**/
         public  $Return;

         /** 自动快照策略id**/
         public  $AutoSnapshotPolicyId;

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
            if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
                $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
            }

        }
}