<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListProjectMemberResponse extends BaseModel
{
         /**Object **/
         public  $ListProjectMember;

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
            if (array_key_exists("ListProjectMember",$param) and $param["ListProjectMember"] !== null) {
                $this->ListProjectMember = $param["ListProjectMember"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}