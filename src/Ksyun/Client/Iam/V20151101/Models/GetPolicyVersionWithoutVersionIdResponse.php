<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetPolicyVersionWithoutVersionIdResponse extends BaseModel
{
         /** errorcode**/
         public  $errorcode;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("errorcode",$param) and $param["errorcode"] !== null) {
                $this->errorcode = $param["errorcode"];
            }

        }
}