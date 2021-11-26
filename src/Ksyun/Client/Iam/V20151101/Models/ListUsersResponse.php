<?php
/*
 */
namespace Ksyun\Client\Iam\V20151101\Models;
use Ksyun\Common\BaseModel;


class ListUsersResponse extends BaseModel
{
    /**
     * @var ListUserResult 用户列表
     */
    public $ListUserResult;


    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;


    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
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
    }
}
