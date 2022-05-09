<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateLoginProfileResponse extends BaseModel
{
         /** CreateLoginProfileResponse**/
         public  $CreateLoginProfileResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CreateLoginProfileResponse",$param) and $param["CreateLoginProfileResponse"] !== null) {
                $this->CreateLoginProfileResponse = $param["CreateLoginProfileResponse"];
            }

        }
}