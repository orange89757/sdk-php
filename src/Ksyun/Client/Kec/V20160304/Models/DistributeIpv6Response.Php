<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DistributeIpv6Response extends BaseModel
{
         /** ipv6地址**/
         public  $Ipv6;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
                $this->Ipv6 = $param["Ipv6"];
            }

        }
}