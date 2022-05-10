<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeLocalVolumeCountResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /** 本地盘数量**/
         public  $LocalVolumeCount;

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
            if (array_key_exists("LocalVolumeCount",$param) and $param["LocalVolumeCount"] !== null) {
                $this->LocalVolumeCount = $param["LocalVolumeCount"];
            }

        }
}