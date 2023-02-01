<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreatePolicyResponse extends BaseModel
{
         /** **/
         public  $CreatePolicyResult;

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
            if (array_key_exists("CreatePolicyResult",$param) and $param["CreatePolicyResult"] !== null) {
                $this->CreatePolicyResult = $param["CreatePolicyResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}