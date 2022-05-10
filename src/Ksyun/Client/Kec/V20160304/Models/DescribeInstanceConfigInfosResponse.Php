<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeInstanceConfigInfosResponse extends BaseModel
{
         /** 可用区**/
         public  $availability-zone;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("availability-zone",$param) and $param["availability-zone"] !== null) {
                $this->availability-zone = $param["availability-zone"];
            }

        }
}