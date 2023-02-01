<?php
namespace  Ksyun\Client\Iam\V20191101\Models;

use Ksyun\Common\BaseModel;

class AssumeRoleWithSAMLResponse extends BaseModel
{
         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }

        }
}