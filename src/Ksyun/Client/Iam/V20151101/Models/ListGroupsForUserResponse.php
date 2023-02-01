<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListGroupsForUserResponse extends BaseModel
{
         /** **/
         public  $ListGroupsForUserResult;

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
            if (array_key_exists("ListGroupsForUserResult",$param) and $param["ListGroupsForUserResult"] !== null) {
                $this->ListGroupsForUserResult = $param["ListGroupsForUserResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}