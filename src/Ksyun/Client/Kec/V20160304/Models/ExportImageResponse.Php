<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ExportImageResponse extends BaseModel
{
         /** true**/
         public  $retrun;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("retrun",$param) and $param["retrun"] !== null) {
                $this->retrun = $param["retrun"];
            }

        }
}