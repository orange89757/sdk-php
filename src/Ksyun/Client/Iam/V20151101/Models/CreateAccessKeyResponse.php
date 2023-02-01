<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateAccessKeyResponse extends BaseModel
{
         /** CreateAccessKeyResponse**/
         public  $CreateAccessKeyResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CreateAccessKeyResponse",$param) and $param["CreateAccessKeyResponse"] !== null) {
                $this->CreateAccessKeyResponse = $param["CreateAccessKeyResponse"];
            }

        }
}