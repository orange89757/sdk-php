<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CancelImageExportResponse extends BaseModel
{
         /** imageId**/
         public  $imageId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("imageId",$param) and $param["imageId"] !== null) {
                $this->imageId = $param["imageId"];
            }

        }
}