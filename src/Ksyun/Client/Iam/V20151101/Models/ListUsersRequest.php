<?php

namespace Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class ListUsersRequest extends BaseModel
{
    /**
     * @var string
     */
     public $MaxItems;

    /**
     * @var string
     */
    public $Marker;


    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function unserialize($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("MaxItems",$param) and $param["MaxItems"] !== null) {
            $this->MaxItems = $param["MaxItems"];
        }

        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            $this->Marker = $param["Marker"];
        }

    }
}
