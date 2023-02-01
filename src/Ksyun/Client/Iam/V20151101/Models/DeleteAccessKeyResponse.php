<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class DeleteAccessKeyResponse extends BaseModel
{
         /** DeleteAccessKeyResponse**/
         public  $DeleteAccessKeyResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DeleteAccessKeyResponse",$param) and $param["DeleteAccessKeyResponse"] !== null) {
                $this->DeleteAccessKeyResponse = $param["DeleteAccessKeyResponse"];
            }

        }
}