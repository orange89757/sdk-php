<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class DeleteRoleResponse extends BaseModel
{
         /** DeleteRoleResponse**/
         public  $DeleteRoleResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DeleteRoleResponse",$param) and $param["DeleteRoleResponse"] !== null) {
                $this->DeleteRoleResponse = $param["DeleteRoleResponse"];
            }

        }
}