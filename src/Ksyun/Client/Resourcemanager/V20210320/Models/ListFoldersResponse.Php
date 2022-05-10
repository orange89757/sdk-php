<?php
namespace  Ksyun\Client\Resourcemanager\V20210320\Models;

use Ksyun\Common\BaseModel;

class ListFoldersResponse extends BaseModel
{
         /** **/
         public  $Name;

         /** **/
         public  $Desc;

         /** **/
         public  $FolderId;

         /** **/
         public  $Id;

         /** **/
         public  $CreatedTime;

         /** **/
         public  $Level;

         /** **/
         public  $ParentId;

         /** **/
         public  $Num;

         /**Object **/
         public  $SonFolder;

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
            if (array_key_exists("Name",$param) and $param["Name"] !== null) {
                $this->Name = $param["Name"];
            }
            if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
                $this->Desc = $param["Desc"];
            }
            if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
                $this->FolderId = $param["FolderId"];
            }
            if (array_key_exists("Id",$param) and $param["Id"] !== null) {
                $this->Id = $param["Id"];
            }
            if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
                $this->CreatedTime = $param["CreatedTime"];
            }
            if (array_key_exists("Level",$param) and $param["Level"] !== null) {
                $this->Level = $param["Level"];
            }
            if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
                $this->ParentId = $param["ParentId"];
            }
            if (array_key_exists("Num",$param) and $param["Num"] !== null) {
                $this->Num = $param["Num"];
            }
            if (array_key_exists("SonFolder",$param) and $param["SonFolder"] !== null) {
                $this->SonFolder = $param["SonFolder"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}