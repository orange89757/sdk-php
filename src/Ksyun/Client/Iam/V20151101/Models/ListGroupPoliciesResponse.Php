<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListGroupPoliciesResponse extends BaseModel
{
         /** PolicyKrn**/
         public  $PolicyKrn;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("PolicyKrn",$param) and $param["PolicyKrn"] !== null) {
                $this->PolicyKrn = $param["PolicyKrn"];
            }

        }
}