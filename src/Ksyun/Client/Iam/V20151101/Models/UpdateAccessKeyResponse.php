<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class UpdateAccessKeyResponse extends BaseModel
{
         /** UpdateAccessKeyResponse**/
         public  $UpdateAccessKeyResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("UpdateAccessKeyResponse",$param) and $param["UpdateAccessKeyResponse"] !== null) {
                $this->UpdateAccessKeyResponse = $param["UpdateAccessKeyResponse"];
            }

        }
}