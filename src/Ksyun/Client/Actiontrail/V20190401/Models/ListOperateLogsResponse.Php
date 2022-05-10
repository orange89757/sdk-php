<?php
namespace  Ksyun\Client\Actiontrail\V20190401\Models;

use Ksyun\Common\BaseModel;

class ListOperateLogsResponse extends BaseModel
{
         /** ListOperateLogsResponse**/
         public  $ListOperateLogsResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ListOperateLogsResponse",$param) and $param["ListOperateLogsResponse"] !== null) {
                $this->ListOperateLogsResponse = $param["ListOperateLogsResponse"];
            }

        }
}