<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifySnapshotScheduledTimeResponse extends BaseModel
{
         /** ModifySnapshotScheduledTime**/
         public  $ModifySnapshotScheduledTime;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ModifySnapshotScheduledTime",$param) and $param["ModifySnapshotScheduledTime"] !== null) {
                $this->ModifySnapshotScheduledTime = $param["ModifySnapshotScheduledTime"];
            }

        }
}