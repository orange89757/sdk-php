<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeInstanceVncResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** vnc地址**/
         public  $vncUrl;

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
            if (array_key_exists("vncUrl",$param) and $param["vncUrl"] !== null) {
                $this->vncUrl = $param["vncUrl"];
            }

        }
}