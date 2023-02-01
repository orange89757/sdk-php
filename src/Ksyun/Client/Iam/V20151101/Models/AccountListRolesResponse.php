<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class AccountListRolesResponse extends BaseModel
{
         /** RoleId**/
         public  $RoleId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
                $this->RoleId = $param["RoleId"];
            }

        }
}