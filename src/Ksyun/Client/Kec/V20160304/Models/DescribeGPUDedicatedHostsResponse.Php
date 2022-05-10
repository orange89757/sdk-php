<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeGPUDedicatedHostsResponse extends BaseModel
{
         /** 专属宿主机id**/
         public  $DedicatedHostId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DedicatedHostId",$param) and $param["DedicatedHostId"] !== null) {
                $this->DedicatedHostId = $param["DedicatedHostId"];
            }

        }
}