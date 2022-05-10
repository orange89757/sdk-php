<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DetachInstancesIamRoleResponse extends BaseModel
{
         /** 实例解除绑定IAM角色**/
         public  $iamRoleName;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("iamRoleName",$param) and $param["iamRoleName"] !== null) {
                $this->iamRoleName = $param["iamRoleName"];
            }

        }
}