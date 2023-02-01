<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreatePolicyVersionResponse extends BaseModel
{
         /** **/
         public  $CreatePolicyVersionResult;

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
            if (array_key_exists("CreatePolicyVersionResult",$param) and $param["CreatePolicyVersionResult"] !== null) {
                $this->CreatePolicyVersionResult = $param["CreatePolicyVersionResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}