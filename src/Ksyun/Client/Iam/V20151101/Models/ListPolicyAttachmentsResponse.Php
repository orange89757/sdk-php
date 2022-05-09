<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListPolicyAttachmentsResponse extends BaseModel
{
         /** 授权实体列表**/
         public  $ListPolicyAttachmentsResult;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ListPolicyAttachmentsResult",$param) and $param["ListPolicyAttachmentsResult"] !== null) {
                $this->ListPolicyAttachmentsResult = $param["ListPolicyAttachmentsResult"];
            }

        }
}