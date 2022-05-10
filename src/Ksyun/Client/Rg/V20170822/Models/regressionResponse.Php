<?php
namespace  Ksyun\Client\Rg\V20170822\Models;

use Ksyun\Common\BaseModel;

class regressionResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /**Object **/
         public  $DataGuardsSet;

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
            if (array_key_exists("DataGuardsSet",$param) and $param["DataGuardsSet"] !== null) {
                $this->DataGuardsSet = $param["DataGuardsSet"];
            }

        }
}