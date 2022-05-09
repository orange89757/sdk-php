<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class GetAccountSummaryResponse extends BaseModel
{
         /** GetAccountSummaryResponse**/
         public  $GetAccountSummaryResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("GetAccountSummaryResponse",$param) and $param["GetAccountSummaryResponse"] !== null) {
                $this->GetAccountSummaryResponse = $param["GetAccountSummaryResponse"];
            }

        }
}