<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeImagesResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 镜像列表**/
         public  $ImagesSet;

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
            if (array_key_exists("ImagesSet",$param) and $param["ImagesSet"] !== null) {
                $this->ImagesSet = $param["ImagesSet"];
            }

        }
}