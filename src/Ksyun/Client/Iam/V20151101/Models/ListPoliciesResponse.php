<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListPoliciesResponse extends BaseModel
{
         /** **/
         public  $ListPoliciesResult;

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
            if (array_key_exists("ListPoliciesResult",$param) and $param["ListPoliciesResult"] !== null) {
                $this->ListPoliciesResult = $param["ListPoliciesResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}