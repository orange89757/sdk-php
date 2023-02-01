<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListAttachedRolePoliciesResponse extends BaseModel
{
         /** **/
         public  $ListAttachedRolePoliciesResult;

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
            if (array_key_exists("ListAttachedRolePoliciesResult",$param) and $param["ListAttachedRolePoliciesResult"] !== null) {
                $this->ListAttachedRolePoliciesResult = $param["ListAttachedRolePoliciesResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}