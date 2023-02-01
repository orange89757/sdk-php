<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class DeleteProjectMemberRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "ProjectId" => null,
         /**String**/
        "MemberIds" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("MemberIds",$param) and $param["MemberIds"] !== null) {
            if(is_bool($param["MemberIds"])){
                $this->RequestParams["MemberIds"] = $param["MemberIds"] ? "true" : "false";
            } else {
                $this->RequestParams["MemberIds"] = $param["MemberIds"];
            }
        }

    }

    private function _unserialize($name,$params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value){
            $this->$name[$key] = $value;
        }

    }
}