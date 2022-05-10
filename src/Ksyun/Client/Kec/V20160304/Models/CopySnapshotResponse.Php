<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CopySnapshotResponse extends BaseModel
{
         /** CopySnapshot**/
         public  $CopySnapshot;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CopySnapshot",$param) and $param["CopySnapshot"] !== null) {
                $this->CopySnapshot = $param["CopySnapshot"];
            }

        }
}