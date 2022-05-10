<?php
namespace  Ksyun\Client\Resourcemanager\V20210320\Models;

use Ksyun\Common\BaseModel;

class ListAccountsForParentResponse extends BaseModel
{
         /**Object 成员列表**/
         public  $Members;

         /** 当前资源夹成员总数量**/
         public  $Count;

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
            if (array_key_exists("Members",$param) and $param["Members"] !== null) {
                $this->Members = $param["Members"];
            }
            if (array_key_exists("Count",$param) and $param["Count"] !== null) {
                $this->Count = $param["Count"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}