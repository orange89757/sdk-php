<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateDataGuardGroupResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestID;

         /** 容灾分组id**/
         public  $DataGuardId;

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
            if (array_key_exists("DataGuardId",$param) and $param["DataGuardId"] !== null) {
                $this->DataGuardId = $param["DataGuardId"];
            }

        }
}