<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListPolicyVersionsResponse extends BaseModel
{
         /** **/
         public  $ListPolicyVersionsResult;

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
            if (array_key_exists("ListPolicyVersionsResult",$param) and $param["ListPolicyVersionsResult"] !== null) {
                $this->ListPolicyVersionsResult = $param["ListPolicyVersionsResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}