<?php
namespace  Ksyun\Client\Rg\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListUsersResponse extends BaseModel
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