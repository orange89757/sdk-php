<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateAccessKeyResponse extends BaseModel
{
         /** **/
         public  $CreateAccessKeyResult;

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
            if (array_key_exists("CreateAccessKeyResult",$param) and $param["CreateAccessKeyResult"] !== null) {
                $this->CreateAccessKeyResult = $param["CreateAccessKeyResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}