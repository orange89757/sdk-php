<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class VerificatePersonResponse extends BaseModel
{
         /** VerificatePersonResult**/
         public  $VerificatePersonResult;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("VerificatePersonResult",$param) and $param["VerificatePersonResult"] !== null) {
                $this->VerificatePersonResult = $param["VerificatePersonResult"];
            }

        }
}