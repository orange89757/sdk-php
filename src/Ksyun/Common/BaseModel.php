<?php

namespace Ksyun\Common;
use \ReflectionClass;

/**
 * 抽象model类，禁止client引用
 * @package App\Ksyun\Common
 */
abstract class BaseModel
{
    /**
     * 内部实现，用户禁止调用
     */
    public function serialize()
    {
        $ret = $this->objSerialize($this);
		return $ret;
    }

    public function requestObjSerialize($obj) {
        $memberRet = [];
        $ref = new ReflectionClass(get_class($obj));
        $memberList = $ref->getProperties();
        foreach ($memberList as $x => $member)
        {
            $name = ucfirst($member->getName());
            $member->setAccessible(true);
            $memberValue = $member->getValue($obj);
            if($name == 'RequestParams'){
                $memberRet = array_merge($memberRet,$memberValue);
            } else {
                foreach ($memberValue as $key => $value){
                    if($value){
                        $memberRet[$key] = $value;
                    }
                }
            }
        }
        return $memberRet;
    }

    private function objSerialize($obj) {
        $objSerialize = json_encode($obj);
        return json_decode($objSerialize,true);
    }

    /**
     * @param string $jsonString json格式的字符串
     */
    public function fromJsonString($jsonString)
    {
        $arr = json_decode($jsonString, true);
        $this->deserialize($arr);
    }

    public function toJsonString()
    {
        $r = $this->serialize();
        // it is an object rather than an array
        if (empty($r)) {
            return "{}";
        }
        return json_encode($r, JSON_UNESCAPED_UNICODE);
    }

    public function __call($member, $param)
    {
        $act = substr($member,0,3);
        $attr = substr($member,3);
        if ($act === "get") {
            return $this->$attr;
        } else if ($act === "set") {
            $this->$attr = $param[0];
        }
    }


    /**
     * @funcName formatFilterParams 如果是Filter的话 需要对参数进行处理
     * @param $params //例如传参 $filter = [["name"=>1,"value"=>1]]
     * @Description 转化 FIlter 类型的数据
     */
    public function formatFilterParams($paramName, $queryParams)
    {
        $res = [];
        foreach ($queryParams as $pKey => $pVal) {
            $prefixName = $paramName . '.' . ($pKey + 1);
            if (is_string($pVal) || is_numeric($pVal)) {
                $res[$prefixName] = $pVal;
            }
            if (is_bool($pVal)) {
                $res[$prefixName] = $pVal ? 'true' : 'false';
            }
            if (is_array($pVal) && !empty($pVal)) {
                $res = array_merge($res, $this->formatFilterParams($prefixName, $pVal));
            }

        }
        return $res;
    }
}

