<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListCountOfRegionsByLineResponse extends BaseModel
{
         /** 列表数据**/
         public  $List;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("List",$param) and $param["List"] !== null) {
                $this->List = $param["List"];
            }

        }
}