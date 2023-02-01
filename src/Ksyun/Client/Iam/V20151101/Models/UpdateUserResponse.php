<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class UpdateUserResponse extends BaseModel
{
         /** UpdateUserResponse**/
         public  $UpdateUserResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("UpdateUserResponse",$param) and $param["UpdateUserResponse"] !== null) {
                $this->UpdateUserResponse = $param["UpdateUserResponse"];
            }

        }
}