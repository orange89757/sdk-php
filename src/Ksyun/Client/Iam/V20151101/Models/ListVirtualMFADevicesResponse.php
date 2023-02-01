<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListVirtualMFADevicesResponse extends BaseModel
{
         /** ListVirtualMFADevicesResult**/
         public  $ListVirtualMFADevicesResult;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ListVirtualMFADevicesResult",$param) and $param["ListVirtualMFADevicesResult"] !== null) {
                $this->ListVirtualMFADevicesResult = $param["ListVirtualMFADevicesResult"];
            }

        }
}