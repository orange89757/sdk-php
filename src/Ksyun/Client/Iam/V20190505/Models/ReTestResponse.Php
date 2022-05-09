<?php
namespace  Ksyun\Client\Iam\V20190505\Models;

use Ksyun\Common\BaseModel;

class ReTestResponse extends BaseModel
{
         /** parama**/
         public  $parama;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("parama",$param) and $param["parama"] !== null) {
                $this->parama = $param["parama"];
            }

        }
}