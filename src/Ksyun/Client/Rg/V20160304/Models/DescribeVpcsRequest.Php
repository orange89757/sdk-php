<?php
namespace  Ksyun\Client\Rg\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeVpcsRequest extends BaseModel
{
    public $RequestParams = [
    ];

     /**特殊参数类型:Filter**/
    public $VpcId = [];
 
    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $res = $this->formatFilterParams("VpcId",$param["VpcId"]);
            $this->_unserialize("VpcId",$res);
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