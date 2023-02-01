<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListPoliciesResponse extends BaseModel
{
         /** ListPoliciesReponse**/
         public  $ListPoliciesReponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ListPoliciesReponse",$param) and $param["ListPoliciesReponse"] !== null) {
                $this->ListPoliciesReponse = $param["ListPoliciesReponse"];
            }

        }
}