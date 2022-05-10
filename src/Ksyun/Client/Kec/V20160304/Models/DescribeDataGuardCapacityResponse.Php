<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeDataGuardCapacityResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestID;

         /** 容灾分组容量信息**/
         public  $DataGuardCapacity;

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
            if (array_key_exists("DataGuardCapacity",$param) and $param["DataGuardCapacity"] !== null) {
                $this->DataGuardCapacity = $param["DataGuardCapacity"];
            }

        }
}