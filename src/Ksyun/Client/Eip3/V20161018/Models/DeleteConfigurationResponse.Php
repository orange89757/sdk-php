<?php
namespace  Ksyun\Client\Eip3\V20161018\Models;

use Ksyun\Common\BaseModel;

class DeleteConfigurationResponse extends BaseModel
{
         /** **/
         public  $DeleteConfigurationResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DeleteConfigurationResponse",$param) and $param["DeleteConfigurationResponse"] !== null) {
                $this->DeleteConfigurationResponse = $param["DeleteConfigurationResponse"];
            }

        }
}