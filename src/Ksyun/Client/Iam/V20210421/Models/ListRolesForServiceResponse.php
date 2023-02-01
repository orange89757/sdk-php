<?php
namespace  Ksyun\Client\Iam\V20210421\Models;

use Ksyun\Common\BaseModel;

class ListRolesForServiceResponse extends BaseModel
{
         /** 角色列表**/
         public  $ListRolesResult;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ListRolesResult",$param) and $param["ListRolesResult"] !== null) {
                $this->ListRolesResult = $param["ListRolesResult"];
            }

        }
}