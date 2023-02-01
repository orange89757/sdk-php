<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateRoleResponse extends BaseModel
{
         /** **/
         public  $CreateRoleResult;

         /** **/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CreateRoleResult",$param) and $param["CreateRoleResult"] !== null) {
                $this->CreateRoleResult = $param["CreateRoleResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}