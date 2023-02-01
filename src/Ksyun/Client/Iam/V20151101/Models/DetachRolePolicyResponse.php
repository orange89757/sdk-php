<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class DetachRolePolicyResponse extends BaseModel
{
         /** DetachRolePolicyResponse**/
         public  $DetachRolePolicyResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DetachRolePolicyResponse",$param) and $param["DetachRolePolicyResponse"] !== null) {
                $this->DetachRolePolicyResponse = $param["DetachRolePolicyResponse"];
            }

        }
}