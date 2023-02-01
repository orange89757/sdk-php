<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListAttachedRolePoliciesResponse extends BaseModel
{
         /** ListAttachedRolePoliciesResponse**/
         public  $ListAttachedRolePoliciesResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ListAttachedRolePoliciesResponse",$param) and $param["ListAttachedRolePoliciesResponse"] !== null) {
                $this->ListAttachedRolePoliciesResponse = $param["ListAttachedRolePoliciesResponse"];
            }

        }
}