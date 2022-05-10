<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeReservationConfigurationOpResponse extends BaseModel
{
         /** 数据集合**/
         public  $ReservationConfigurationOps;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ReservationConfigurationOps",$param) and $param["ReservationConfigurationOps"] !== null) {
                $this->ReservationConfigurationOps = $param["ReservationConfigurationOps"];
            }

        }
}