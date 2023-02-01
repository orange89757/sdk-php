<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class UpdateInstanceProjectIdResponse extends BaseModel
{
         /** UpdateInstanceProjectIdResponse**/
         public  $UpdateInstanceProjectIdResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("UpdateInstanceProjectIdResponse",$param) and $param["UpdateInstanceProjectIdResponse"] !== null) {
                $this->UpdateInstanceProjectIdResponse = $param["UpdateInstanceProjectIdResponse"];
            }

        }
}