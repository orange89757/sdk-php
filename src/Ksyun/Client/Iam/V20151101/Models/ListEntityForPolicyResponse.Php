<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListEntityForPolicyResponse extends BaseModel
{
         /** ListEntitiesForPolicyResponse**/
         public  $ListEntitiesForPolicyResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ListEntitiesForPolicyResponse",$param) and $param["ListEntitiesForPolicyResponse"] !== null) {
                $this->ListEntitiesForPolicyResponse = $param["ListEntitiesForPolicyResponse"];
            }

        }
}