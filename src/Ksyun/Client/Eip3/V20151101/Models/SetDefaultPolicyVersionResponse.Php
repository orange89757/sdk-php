<?php
namespace  Ksyun\Client\Eip3\V20151101\Models;

use Ksyun\Common\BaseModel;

class SetDefaultPolicyVersionResponse extends BaseModel
{
         /** a**/
         public  $a;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("a",$param) and $param["a"] !== null) {
                $this->a = $param["a"];
            }

        }
}