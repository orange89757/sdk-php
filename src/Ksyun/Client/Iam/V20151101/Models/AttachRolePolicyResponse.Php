<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class AttachRolePolicyResponse extends BaseModel
{
         /** AttachRolePolicyResponse**/
         public  $AttachRolePolicyResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("AttachRolePolicyResponse",$param) and $param["AttachRolePolicyResponse"] !== null) {
                $this->AttachRolePolicyResponse = $param["AttachRolePolicyResponse"];
            }

        }
}