<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetProjectInstanceListResponse extends BaseModel
{
         /** GetProjectInstanceListResponse**/
         public  $GetProjectInstanceListResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("GetProjectInstanceListResponse",$param) and $param["GetProjectInstanceListResponse"] !== null) {
                $this->GetProjectInstanceListResponse = $param["GetProjectInstanceListResponse"];
            }

        }
}