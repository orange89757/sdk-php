<?php
namespace  Ksyun\Client\Rg\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteRouteResponse extends BaseModel
{
         /** **/
         public  $22;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("22",$param) and $param["22"] !== null) {
                $this->22 = $param["22"];
            }

        }
}