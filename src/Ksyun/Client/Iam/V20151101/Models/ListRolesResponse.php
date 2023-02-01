<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListRolesResponse extends BaseModel
{
         /** **/
         public  $ListRolesResult;

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
            if (array_key_exists("ListRolesResult",$param) and $param["ListRolesResult"] !== null) {
                $this->ListRolesResult = $param["ListRolesResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}