<?php
namespace  Ksyun\Client\Kec\V20160303\Models;

use Ksyun\Common\BaseModel;

class EnableImageCachingResponse extends BaseModel
{
         /** cc**/
         public  $requestid;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("requestid",$param) and $param["requestid"] !== null) {
                $this->requestid = $param["requestid"];
            }

        }
}