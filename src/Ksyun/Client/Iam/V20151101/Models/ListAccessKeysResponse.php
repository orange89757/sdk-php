<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListAccessKeysResponse extends BaseModel
{
         /** ListAccessKeysResponse**/
         public  $ListAccessKeysResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ListAccessKeysResponse",$param) and $param["ListAccessKeysResponse"] !== null) {
                $this->ListAccessKeysResponse = $param["ListAccessKeysResponse"];
            }

        }
}