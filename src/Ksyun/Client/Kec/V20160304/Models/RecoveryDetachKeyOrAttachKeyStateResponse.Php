<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class RecoveryDetachKeyOrAttachKeyStateResponse extends BaseModel
{
         /** instanceId**/
         public  $instanceId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("instanceId",$param) and $param["instanceId"] !== null) {
                $this->instanceId = $param["instanceId"];
            }

        }
}