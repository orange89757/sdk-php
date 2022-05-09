<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class SearchListAkAndSkResponse extends BaseModel
{
         /** 总条数**/
         public  $total;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("total",$param) and $param["total"] !== null) {
                $this->total = $param["total"];
            }

        }
}