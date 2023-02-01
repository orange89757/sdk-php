<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CheckUserSessionCodeResponse extends BaseModel
{
         /** CheckUserSessionCodeResponse**/
         public  $CheckUserSessionCodeResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CheckUserSessionCodeResponse",$param) and $param["CheckUserSessionCodeResponse"] !== null) {
                $this->CheckUserSessionCodeResponse = $param["CheckUserSessionCodeResponse"];
            }

        }
}