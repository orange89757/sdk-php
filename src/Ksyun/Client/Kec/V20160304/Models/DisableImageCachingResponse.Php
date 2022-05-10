<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DisableImageCachingResponse extends BaseModel
{
         /** zcx**/
         public  $requesit;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("requesit",$param) and $param["requesit"] !== null) {
                $this->requesit = $param["requesit"];
            }

        }
}