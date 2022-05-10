<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class QueryMaxBootNumResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /** 最大开机数量**/
         public  $MaxBootNum;

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
            if (array_key_exists("MaxBootNum",$param) and $param["MaxBootNum"] !== null) {
                $this->MaxBootNum = $param["MaxBootNum"];
            }

        }
}