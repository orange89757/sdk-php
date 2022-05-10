<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeInstancesResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 当前页的记录起始索引**/
         public  $Marker;

         /** 总记录数**/
         public  $InstanceCount;

         /** 实例信息**/
         public  $InstancesSet;

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
            if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
                $this->Marker = $param["Marker"];
            }
            if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
                $this->InstanceCount = $param["InstanceCount"];
            }
            if (array_key_exists("InstancesSet",$param) and $param["InstancesSet"] !== null) {
                $this->InstancesSet = $param["InstancesSet"];
            }

        }
}