<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeDedicatedClusterResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 集群信息**/
         public  $DedicatedClustersSet;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("DedicatedClustersSet",$param) and $param["DedicatedClustersSet"] !== null) {
                $this->DedicatedClustersSet = $param["DedicatedClustersSet"];
            }

        }
}