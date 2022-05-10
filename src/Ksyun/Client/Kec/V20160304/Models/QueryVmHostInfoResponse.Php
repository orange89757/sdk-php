<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class QueryVmHostInfoResponse extends BaseModel
{
         /** 是否支持ipv6**/
         public  $enable_ipv6;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("enable_ipv6",$param) and $param["enable_ipv6"] !== null) {
                $this->enable_ipv6 = $param["enable_ipv6"];
            }

        }
}