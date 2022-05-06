<?php
namespace  Ksyun\Client\Aaaaaa111_333_2\V20211212\Models;

use Ksyun\Common\BaseModel;

class fantastyResponse extends BaseModel
{
         /** Int类型**/
         public  $server-Int-1;

         /**String **/
         public  $server-array-2;

         /** **/
         public  $server-object-3;

         /** **/
         public  $server-string-4;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("server-Int-1",$param) and $param["server-Int-1"] !== null) {
                $this->server-Int-1 = $param["server-Int-1"];
            }
            if (array_key_exists("server-array-2",$param) and $param["server-array-2"] !== null) {
                $this->server-array-2 = $param["server-array-2"];
            }
            if (array_key_exists("server-object-3",$param) and $param["server-object-3"] !== null) {
                $this->server-object-3 = $param["server-object-3"];
            }
            if (array_key_exists("server-string-4",$param) and $param["server-string-4"] !== null) {
                $this->server-string-4 = $param["server-string-4"];
            }

        }
}