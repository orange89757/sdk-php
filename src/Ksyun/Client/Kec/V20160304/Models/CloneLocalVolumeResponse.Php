<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CloneLocalVolumeResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 处理结果**/
         public  $LocalVolumeSet;

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
            if (array_key_exists("LocalVolumeSet",$param) and $param["LocalVolumeSet"] !== null) {
                $this->LocalVolumeSet = $param["LocalVolumeSet"];
            }

        }
}