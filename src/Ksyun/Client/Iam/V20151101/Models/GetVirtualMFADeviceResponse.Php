<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetVirtualMFADeviceResponse extends BaseModel
{
         /** GetVirtualMFADeviceResponse**/
         public  $GetVirtualMFADeviceResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("GetVirtualMFADeviceResponse",$param) and $param["GetVirtualMFADeviceResponse"] !== null) {
                $this->GetVirtualMFADeviceResponse = $param["GetVirtualMFADeviceResponse"];
            }

        }
}