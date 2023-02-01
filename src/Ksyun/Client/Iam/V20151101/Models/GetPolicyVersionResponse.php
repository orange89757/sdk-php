<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetPolicyVersionResponse extends BaseModel
{
         /** **/
         public  $GetPolicyVersionResult;

         /** **/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("GetPolicyVersionResult",$param) and $param["GetPolicyVersionResult"] !== null) {
                $this->GetPolicyVersionResult = $param["GetPolicyVersionResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}