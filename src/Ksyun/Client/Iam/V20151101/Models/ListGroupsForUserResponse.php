<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListGroupsForUserResponse extends BaseModel
{
         /** GroupId**/
         public  $GroupId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
                $this->GroupId = $param["GroupId"];
            }

        }
}