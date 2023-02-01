<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListGroupsResponse extends BaseModel
{
         /** **/
         public  $ListGroupsResult;

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
            if (array_key_exists("ListGroupsResult",$param) and $param["ListGroupsResult"] !== null) {
                $this->ListGroupsResult = $param["ListGroupsResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}