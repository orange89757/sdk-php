<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetUserSessionResponse extends BaseModel
{
         /** GetUserSessionResponse**/
         public  $GetUserSessionResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("GetUserSessionResponse",$param) and $param["GetUserSessionResponse"] !== null) {
                $this->GetUserSessionResponse = $param["GetUserSessionResponse"];
            }

        }
}