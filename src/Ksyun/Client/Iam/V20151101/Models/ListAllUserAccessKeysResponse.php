<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListAllUserAccessKeysResponse extends BaseModel
{
         /**Object **/
         public  $AccessKeyList;

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
            if (array_key_exists("AccessKeyList",$param) and $param["AccessKeyList"] !== null) {
                $this->AccessKeyList = $param["AccessKeyList"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}