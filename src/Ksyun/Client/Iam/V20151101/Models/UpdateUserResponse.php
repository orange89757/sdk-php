<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class UpdateUserResponse extends BaseModel
{
         /** UpdateUserResult**/
         public  $UpdateUserResult;

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
            if (array_key_exists("UpdateUserResult",$param) and $param["UpdateUserResult"] !== null) {
                $this->UpdateUserResult = $param["UpdateUserResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}