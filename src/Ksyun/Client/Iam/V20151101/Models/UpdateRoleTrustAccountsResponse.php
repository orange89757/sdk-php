<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class UpdateRoleTrustAccountsResponse extends BaseModel
{
         /** UpdateRoleTrustAccountsResponse**/
         public  $UpdateRoleTrustAccountsResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("UpdateRoleTrustAccountsResponse",$param) and $param["UpdateRoleTrustAccountsResponse"] !== null) {
                $this->UpdateRoleTrustAccountsResponse = $param["UpdateRoleTrustAccountsResponse"];
            }

        }
}