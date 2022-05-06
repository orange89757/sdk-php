<?php
namespace  Ksyun\Client\Aaaaaa111_333_2\V20211212\Models;

use Ksyun\Common\BaseModel;

class fantastyRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "integral-number1" => null,
         /**Double**/
        "Double2" => null,
         /**Int**/
        "Int-triple" => null,
         /**String**/
        "String-fourth" => null,
         /**Boolean**/
        "Boolean-five" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("integral-number1",$param) and $param["integral-number1"] !== null) {
            if(is_bool($param["integral-number1"])){
                $this->RequestParams["integral-number1"] = $param["integral-number1"] ? "true" : "false";
            } else {
                $this->RequestParams["integral-number1"] = $param["integral-number1"];
            }
        }
        if (array_key_exists("Double2",$param) and $param["Double2"] !== null) {
            if(is_bool($param["Double2"])){
                $this->RequestParams["Double2"] = $param["Double2"] ? "true" : "false";
            } else {
                $this->RequestParams["Double2"] = $param["Double2"];
            }
        }
        if (array_key_exists("Int-triple",$param) and $param["Int-triple"] !== null) {
            if(is_bool($param["Int-triple"])){
                $this->RequestParams["Int-triple"] = $param["Int-triple"] ? "true" : "false";
            } else {
                $this->RequestParams["Int-triple"] = $param["Int-triple"];
            }
        }
        if (array_key_exists("String-fourth",$param) and $param["String-fourth"] !== null) {
            if(is_bool($param["String-fourth"])){
                $this->RequestParams["String-fourth"] = $param["String-fourth"] ? "true" : "false";
            } else {
                $this->RequestParams["String-fourth"] = $param["String-fourth"];
            }
        }
        if (array_key_exists("Boolean-five",$param) and $param["Boolean-five"] !== null) {
            if(is_bool($param["Boolean-five"])){
                $this->RequestParams["Boolean-five"] = $param["Boolean-five"] ? "true" : "false";
            } else {
                $this->RequestParams["Boolean-five"] = $param["Boolean-five"];
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