<?php
namespace  Ksyun\Client\Eip3\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeAddressesResponse extends BaseModel
{
         /**Object 弹性IP的信息**/
         public  $AddressesSet;

         /** 请求ID**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("AddressesSet",$param) and $param["AddressesSet"] !== null) {
                $this->AddressesSet = $param["AddressesSet"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}