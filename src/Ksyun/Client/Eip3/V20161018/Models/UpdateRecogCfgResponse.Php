<?php
namespace  Ksyun\Client\Eip3\V20161018\Models;

use Ksyun\Common\BaseModel;

class UpdateRecogCfgResponse extends BaseModel
{
         /** **/
         public  $UpdateRecogCfgResponse;

         /** **/
         public  $UpdateRecogCfgResponse1;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("UpdateRecogCfgResponse",$param) and $param["UpdateRecogCfgResponse"] !== null) {
                $this->UpdateRecogCfgResponse = $param["UpdateRecogCfgResponse"];
            }
            if (array_key_exists("UpdateRecogCfgResponse1",$param) and $param["UpdateRecogCfgResponse1"] !== null) {
                $this->UpdateRecogCfgResponse1 = $param["UpdateRecogCfgResponse1"];
            }

        }
}