<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListUsersResponse extends BaseModel
{
         /** **/
         public  $ListUserResult;

         /** **/
         public  $RequestId;

         /**Object **/
         public  $arr;

         /**Object **/
         public  $array1;

         /** **/
         public  $arryay2;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ListUserResult",$param) and $param["ListUserResult"] !== null) {
                $this->ListUserResult = $param["ListUserResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("arr",$param) and $param["arr"] !== null) {
                $this->arr = $param["arr"];
            }
            if (array_key_exists("array1",$param) and $param["array1"] !== null) {
                $this->array1 = $param["array1"];
            }
            if (array_key_exists("arryay2",$param) and $param["arryay2"] !== null) {
                $this->arryay2 = $param["arryay2"];
            }

        }
}