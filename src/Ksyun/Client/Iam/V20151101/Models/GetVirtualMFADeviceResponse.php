<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetVirtualMFADeviceResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** 设备信息**/
         public  $VirtualMFADevice;

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
            if (array_key_exists("VirtualMFADevice",$param) and $param["VirtualMFADevice"] !== null) {
                $this->VirtualMFADevice = $param["VirtualMFADevice"];
            }

        }
}