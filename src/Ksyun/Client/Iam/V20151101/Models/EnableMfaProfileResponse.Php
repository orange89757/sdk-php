<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class EnableMfaProfileResponse extends BaseModel
{
         /** EnableMfaProfileResponse**/
         public  $EnableMfaProfileResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("EnableMfaProfileResponse",$param) and $param["EnableMfaProfileResponse"] !== null) {
                $this->EnableMfaProfileResponse = $param["EnableMfaProfileResponse"];
            }

        }
}