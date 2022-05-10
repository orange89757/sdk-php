<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeIpv6CapabilityResponse extends BaseModel
{
         /** 是否具有分配ipv6的能力**/
         public  $CanDistributeIpv6;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CanDistributeIpv6",$param) and $param["CanDistributeIpv6"] !== null) {
                $this->CanDistributeIpv6 = $param["CanDistributeIpv6"];
            }

        }
}