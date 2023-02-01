<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class EnableMFADeviceResponse extends BaseModel
{
         /** EnableMFADeviceResponse**/
         public  $EnableMFADeviceResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("EnableMFADeviceResponse",$param) and $param["EnableMFADeviceResponse"] !== null) {
                $this->EnableMFADeviceResponse = $param["EnableMFADeviceResponse"];
            }

        }
}