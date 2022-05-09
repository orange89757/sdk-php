<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class TestResponse extends BaseModel
{
         /** test**/
         public  $test;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("test",$param) and $param["test"] !== null) {
                $this->test = $param["test"];
            }

        }
}