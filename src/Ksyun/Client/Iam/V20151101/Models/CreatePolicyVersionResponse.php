<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreatePolicyVersionResponse extends BaseModel
{
         /** CreatePolicyVersionResponse**/
         public  $CreatePolicyVersionResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CreatePolicyVersionResponse",$param) and $param["CreatePolicyVersionResponse"] !== null) {
                $this->CreatePolicyVersionResponse = $param["CreatePolicyVersionResponse"];
            }

        }
}