<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class EnableImageCachingResponse extends BaseModel
{
         /** dsdsd**/
         public  $imageid;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("imageid",$param) and $param["imageid"] !== null) {
                $this->imageid = $param["imageid"];
            }

        }
}