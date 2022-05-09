<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListInstancesResponse extends BaseModel
{
         /** 实例列表**/
         public  $InstanceList;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("InstanceList",$param) and $param["InstanceList"] !== null) {
                $this->InstanceList = $param["InstanceList"];
            }

        }
}