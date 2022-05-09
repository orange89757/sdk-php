<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class DeleteLoginProfileResponse extends BaseModel
{
         /** DeleteLoginProfileResponse**/
         public  $DeleteLoginProfileResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DeleteLoginProfileResponse",$param) and $param["DeleteLoginProfileResponse"] !== null) {
                $this->DeleteLoginProfileResponse = $param["DeleteLoginProfileResponse"];
            }

        }
}