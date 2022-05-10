<?php
namespace  Ksyun\Client\Resourcemanager\V20210320\Models;

use Ksyun\Common\BaseModel;

class UpdateAccountResponse extends BaseModel
{
         /** **/
         public  $MemberId;

         /** **/
         public  $RootFolderId;

         /** **/
         public  $FolderId;

         /** **/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
                $this->MemberId = $param["MemberId"];
            }
            if (array_key_exists("RootFolderId",$param) and $param["RootFolderId"] !== null) {
                $this->RootFolderId = $param["RootFolderId"];
            }
            if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
                $this->FolderId = $param["FolderId"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}