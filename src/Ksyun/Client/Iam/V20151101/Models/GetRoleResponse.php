<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetRoleResponse extends BaseModel
{
         /** GetRoleResponse**/
         public  $GetRoleResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("GetRoleResponse",$param) and $param["GetRoleResponse"] !== null) {
                $this->GetRoleResponse = $param["GetRoleResponse"];
            }

        }
}