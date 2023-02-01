<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class UpdateLoginProfileResponse extends BaseModel
{
         /** **/
         public  $CreateLoginProfileResult;

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
            if (array_key_exists("CreateLoginProfileResult",$param) and $param["CreateLoginProfileResult"] !== null) {
                $this->CreateLoginProfileResult = $param["CreateLoginProfileResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}