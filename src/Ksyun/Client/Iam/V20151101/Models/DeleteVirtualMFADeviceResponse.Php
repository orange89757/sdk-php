<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class DeleteVirtualMFADeviceResponse extends BaseModel
{
         /** DeleteVirtualMFADeviceResponse**/
         public  $DeleteVirtualMFADeviceResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DeleteVirtualMFADeviceResponse",$param) and $param["DeleteVirtualMFADeviceResponse"] !== null) {
                $this->DeleteVirtualMFADeviceResponse = $param["DeleteVirtualMFADeviceResponse"];
            }

        }
}