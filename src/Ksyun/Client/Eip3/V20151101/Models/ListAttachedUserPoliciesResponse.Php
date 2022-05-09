<?php
namespace  Ksyun\Client\Eip3\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListAttachedUserPoliciesResponse extends BaseModel
{
         /** ff**/
         public  $fff;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("fff",$param) and $param["fff"] !== null) {
                $this->fff = $param["fff"];
            }

        }
}