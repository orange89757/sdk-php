<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetPolicyVersionResponse extends BaseModel
{
         /** GetPolicyVersionResponse**/
         public  $GetPolicyVersionResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("GetPolicyVersionResponse",$param) and $param["GetPolicyVersionResponse"] !== null) {
                $this->GetPolicyVersionResponse = $param["GetPolicyVersionResponse"];
            }

        }
}