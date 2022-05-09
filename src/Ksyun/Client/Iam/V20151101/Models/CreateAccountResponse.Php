<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateAccountResponse extends BaseModel
{
         /** CreateAccountResult**/
         public  $CreateAccountResult;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CreateAccountResult",$param) and $param["CreateAccountResult"] !== null) {
                $this->CreateAccountResult = $param["CreateAccountResult"];
            }

        }
}