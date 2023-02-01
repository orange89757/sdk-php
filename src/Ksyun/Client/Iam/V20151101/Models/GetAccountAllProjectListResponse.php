<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetAccountAllProjectListResponse extends BaseModel
{
         /** **/
         public  $ListProjectResult;

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
            if (array_key_exists("ListProjectResult",$param) and $param["ListProjectResult"] !== null) {
                $this->ListProjectResult = $param["ListProjectResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}