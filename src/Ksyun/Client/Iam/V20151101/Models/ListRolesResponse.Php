<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListRolesResponse extends BaseModel
{
         /** ListRolesResponse**/
         public  $ListRolesResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ListRolesResponse",$param) and $param["ListRolesResponse"] !== null) {
                $this->ListRolesResponse = $param["ListRolesResponse"];
            }

        }
}