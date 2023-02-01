<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListEntitiesForPolicyResponse extends BaseModel
{
         /** 授权的子用户列表**/
         public  $PolicyUsers;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("PolicyUsers",$param) and $param["PolicyUsers"] !== null) {
                $this->PolicyUsers = $param["PolicyUsers"];
            }

        }
}