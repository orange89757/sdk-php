<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class VerificateCompanyResponse extends BaseModel
{
         /** VerificateCompanyResult**/
         public  $VerificateCompanyResult;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("VerificateCompanyResult",$param) and $param["VerificateCompanyResult"] !== null) {
                $this->VerificateCompanyResult = $param["VerificateCompanyResult"];
            }

        }
}