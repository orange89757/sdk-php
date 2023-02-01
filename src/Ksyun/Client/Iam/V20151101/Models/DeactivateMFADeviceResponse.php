<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class DeactivateMFADeviceResponse extends BaseModel
{
         /** DeactivateMFADeviceResponse**/
         public  $DeactivateMFADeviceResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DeactivateMFADeviceResponse",$param) and $param["DeactivateMFADeviceResponse"] !== null) {
                $this->DeactivateMFADeviceResponse = $param["DeactivateMFADeviceResponse"];
            }

        }
}