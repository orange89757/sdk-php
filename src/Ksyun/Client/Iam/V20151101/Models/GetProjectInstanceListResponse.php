<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetProjectInstanceListResponse extends BaseModel
{
         /** **/
         public  $ListInstanceResult;

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
            if (array_key_exists("ListInstanceResult",$param) and $param["ListInstanceResult"] !== null) {
                $this->ListInstanceResult = $param["ListInstanceResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}