<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateRoleResponse extends BaseModel
{
         /** CreateRoleResponse**/
         public  $CreateRoleResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CreateRoleResponse",$param) and $param["CreateRoleResponse"] !== null) {
                $this->CreateRoleResponse = $param["CreateRoleResponse"];
            }

        }
}