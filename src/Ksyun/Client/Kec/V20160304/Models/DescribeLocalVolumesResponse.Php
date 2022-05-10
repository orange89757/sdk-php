<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeLocalVolumesResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 当前页的其实记录索引数**/
         public  $Marker;

         /** 本地盘数量**/
         public  $LocalVolumeCount;

         /** 本地盘列表**/
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
            if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
                $this->Marker = $param["Marker"];
            }
            if (array_key_exists("LocalVolumeCount",$param) and $param["LocalVolumeCount"] !== null) {
                $this->LocalVolumeCount = $param["LocalVolumeCount"];
            }
            if (array_key_exists("LocalVolumeSet",$param) and $param["LocalVolumeSet"] !== null) {
                $this->LocalVolumeSet = $param["LocalVolumeSet"];
            }

        }
}