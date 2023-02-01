<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListAttachedUserPoliciesResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $ListAttachedUserPoliciesResult;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("ListAttachedUserPoliciesResult",$param) and $param["ListAttachedUserPoliciesResult"] !== null) {
                $this->ListAttachedUserPoliciesResult = $param["ListAttachedUserPoliciesResult"];
            }

        }
}