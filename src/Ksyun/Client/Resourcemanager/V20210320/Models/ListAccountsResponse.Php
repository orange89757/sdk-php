<?php
namespace  Ksyun\Client\Resourcemanager\V20210320\Models;

use Ksyun\Common\BaseModel;

class ListAccountsResponse extends BaseModel
{
         /**Object 成员列表**/
         public  $Accounts;

         /**Object 分页信息**/
         public  $Pagination;

         /** 请求ID**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
                $this->Accounts = $param["Accounts"];
            }
            if (array_key_exists("Pagination",$param) and $param["Pagination"] !== null) {
                $this->Pagination = $param["Pagination"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}