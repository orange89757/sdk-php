<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CalculatePolicyNumResponse extends BaseModel
{
         /** RequestID**/
         public  $RequestID;

         /** 查询结果**/
         public  $Return;

         /** 策略数量**/
         public  $AutoSnapshotPolicyNum;

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
            if (array_key_exists("AutoSnapshotPolicyNum",$param) and $param["AutoSnapshotPolicyNum"] !== null) {
                $this->AutoSnapshotPolicyNum = $param["AutoSnapshotPolicyNum"];
            }

        }
}