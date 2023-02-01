<?php
namespace  Ksyun\Client\Iam\V19700101\Models;

use Ksyun\Common\BaseModel;

class testaResponse extends BaseModel
{
         /** adsf**/
         public  $asdf;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("asdf",$param) and $param["asdf"] !== null) {
                $this->asdf = $param["asdf"];
            }

        }
}