<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ChangePasswordResponse extends BaseModel
{
         /** ChangePasswordResponse**/
         public  $ChangePasswordResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ChangePasswordResponse",$param) and $param["ChangePasswordResponse"] !== null) {
                $this->ChangePasswordResponse = $param["ChangePasswordResponse"];
            }

        }
}