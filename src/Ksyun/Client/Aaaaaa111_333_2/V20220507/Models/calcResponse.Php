<?php
namespace  Ksyun\Client\Aaaaaa111_333_2\V20220507\Models;

use Ksyun\Common\BaseModel;

class calcResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** **/
         public  $InstancesSet;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("InstancesSet",$param) and $param["InstancesSet"] !== null) {
                $this->InstancesSet = $param["InstancesSet"];
            }

        }
}