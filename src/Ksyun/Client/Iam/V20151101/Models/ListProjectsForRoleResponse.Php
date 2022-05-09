<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListProjectsForRoleResponse extends BaseModel
{
         /** 项目**/
         public  $Projects;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Projects",$param) and $param["Projects"] !== null) {
                $this->Projects = $param["Projects"];
            }

        }
}