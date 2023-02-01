<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class DeleteGroupResponse extends BaseModel
{
         /** result**/
         public  $result;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("result",$param) and $param["result"] !== null) {
                $this->result = $param["result"];
            }

        }
}