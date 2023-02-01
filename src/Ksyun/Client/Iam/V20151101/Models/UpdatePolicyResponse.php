<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class UpdatePolicyResponse extends BaseModel
{
         /** **/
         public  $UpdatePolicyResult;

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
            if (array_key_exists("UpdatePolicyResult",$param) and $param["UpdatePolicyResult"] !== null) {
                $this->UpdatePolicyResult = $param["UpdatePolicyResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}