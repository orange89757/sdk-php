<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetLoginProfileResponse extends BaseModel
{
         /** GetLoginProfileResponse**/
         public  $GetLoginProfileResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("GetLoginProfileResponse",$param) and $param["GetLoginProfileResponse"] !== null) {
                $this->GetLoginProfileResponse = $param["GetLoginProfileResponse"];
            }

        }
}