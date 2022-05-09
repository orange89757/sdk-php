<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateVirtualMFADeviceResponse extends BaseModel
{
         /** CreateVirtualMFADeviceResponse**/
         public  $CreateVirtualMFADeviceResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CreateVirtualMFADeviceResponse",$param) and $param["CreateVirtualMFADeviceResponse"] !== null) {
                $this->CreateVirtualMFADeviceResponse = $param["CreateVirtualMFADeviceResponse"];
            }

        }
}