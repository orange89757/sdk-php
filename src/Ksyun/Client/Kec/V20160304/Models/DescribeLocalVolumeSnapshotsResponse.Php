<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeLocalVolumeSnapshotsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 当前页的起始记录索引**/
         public  $Marker;

         /** 本地盘快照数量**/
         public  $LocalVolumeSnapshotCount;

         /** 本地盘快照列表**/
         public  $LocalVolumeSnapshotSet;

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
            if (array_key_exists("LocalVolumeSnapshotCount",$param) and $param["LocalVolumeSnapshotCount"] !== null) {
                $this->LocalVolumeSnapshotCount = $param["LocalVolumeSnapshotCount"];
            }
            if (array_key_exists("LocalVolumeSnapshotSet",$param) and $param["LocalVolumeSnapshotSet"] !== null) {
                $this->LocalVolumeSnapshotSet = $param["LocalVolumeSnapshotSet"];
            }

        }
}