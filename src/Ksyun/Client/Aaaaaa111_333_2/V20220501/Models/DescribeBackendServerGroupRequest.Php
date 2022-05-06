<?php
namespace  Ksyun\Client\Aaaaaa111_333_2\V20220501\Models;

use Ksyun\Common\BaseModel;

class DescribeBackendServerGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**Double**/
        "fragile---double" => null,
         /**Int**/
        "ephemeral---intephemeral---intephemeral---intephemeral---int1111" => null,
         /**Int**/
        "vulnerable---Int" => null,
         /**String**/
        "rigid---string" => null,
         /**Boolean**/
        "solitude---boolean" => null,
         /**Int**/
        "feud-filter-Int" => null,
         /**String**/
        "tranquil-filter-string" => null,
         /**Array**/
        "strenuous-array-int" => null,
         /**Array**/
        "hypothetical-array-double" => null,
         /**Int**/
        "stereotype-array-Int" => null,
         /**Boolean**/
        "unicorn-array-boolean" => null,
         /**Array**/
        "phoenix-array-string" => null,
         /**Array**/
        "welfwaf-array-object" => null,
         /**Int**/
        "filrte.23" => null,
    ];

     /**特殊参数类型:Filter**/
    public $ferocious---filter = [];
      /**特殊参数类型:Filter**/
    public $integrity---filter-double = [];
      /**特殊参数类型:Filter**/
    public $prostitution-filter-boolean = [];
      /**特殊参数类型:Filter**/
    public $reciprocal-filter-object = [];
 
    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("fragile---double",$param) and $param["fragile---double"] !== null) {
            if(is_bool($param["fragile---double"])){
                $this->RequestParams["fragile---double"] = $param["fragile---double"] ? "true" : "false";
            } else {
                $this->RequestParams["fragile---double"] = $param["fragile---double"];
            }
        }
        if (array_key_exists("ephemeral---intephemeral---intephemeral---intephemeral---int1111",$param) and $param["ephemeral---intephemeral---intephemeral---intephemeral---int1111"] !== null) {
            if(is_bool($param["ephemeral---intephemeral---intephemeral---intephemeral---int1111"])){
                $this->RequestParams["ephemeral---intephemeral---intephemeral---intephemeral---int1111"] = $param["ephemeral---intephemeral---intephemeral---intephemeral---int1111"] ? "true" : "false";
            } else {
                $this->RequestParams["ephemeral---intephemeral---intephemeral---intephemeral---int1111"] = $param["ephemeral---intephemeral---intephemeral---intephemeral---int1111"];
            }
        }
        if (array_key_exists("vulnerable---Int",$param) and $param["vulnerable---Int"] !== null) {
            if(is_bool($param["vulnerable---Int"])){
                $this->RequestParams["vulnerable---Int"] = $param["vulnerable---Int"] ? "true" : "false";
            } else {
                $this->RequestParams["vulnerable---Int"] = $param["vulnerable---Int"];
            }
        }
        if (array_key_exists("rigid---string",$param) and $param["rigid---string"] !== null) {
            if(is_bool($param["rigid---string"])){
                $this->RequestParams["rigid---string"] = $param["rigid---string"] ? "true" : "false";
            } else {
                $this->RequestParams["rigid---string"] = $param["rigid---string"];
            }
        }
        if (array_key_exists("solitude---boolean",$param) and $param["solitude---boolean"] !== null) {
            if(is_bool($param["solitude---boolean"])){
                $this->RequestParams["solitude---boolean"] = $param["solitude---boolean"] ? "true" : "false";
            } else {
                $this->RequestParams["solitude---boolean"] = $param["solitude---boolean"];
            }
        }
        if (array_key_exists("ferocious---filter",$param) and $param["ferocious---filter"] !== null) {
            $res = $this->formatFilterParams("ferocious---filter",$param["ferocious---filter"]);
            $this->_unserialize("ferocious---filter",$res);
        }
        if (array_key_exists("integrity---filter-double",$param) and $param["integrity---filter-double"] !== null) {
            $res = $this->formatFilterParams("integrity---filter-double",$param["integrity---filter-double"]);
            $this->_unserialize("integrity---filter-double",$res);
        }
        if (array_key_exists("feud-filter-Int",$param) and $param["feud-filter-Int"] !== null) {
            if(is_bool($param["feud-filter-Int"])){
                $this->RequestParams["feud-filter-Int"] = $param["feud-filter-Int"] ? "true" : "false";
            } else {
                $this->RequestParams["feud-filter-Int"] = $param["feud-filter-Int"];
            }
        }
        if (array_key_exists("tranquil-filter-string",$param) and $param["tranquil-filter-string"] !== null) {
            if(is_bool($param["tranquil-filter-string"])){
                $this->RequestParams["tranquil-filter-string"] = $param["tranquil-filter-string"] ? "true" : "false";
            } else {
                $this->RequestParams["tranquil-filter-string"] = $param["tranquil-filter-string"];
            }
        }
        if (array_key_exists("prostitution-filter-boolean",$param) and $param["prostitution-filter-boolean"] !== null) {
            $res = $this->formatFilterParams("prostitution-filter-boolean",$param["prostitution-filter-boolean"]);
            $this->_unserialize("prostitution-filter-boolean",$res);
        }
        if (array_key_exists("reciprocal-filter-object",$param) and $param["reciprocal-filter-object"] !== null) {
            $res = $this->formatFilterParams("reciprocal-filter-object",$param["reciprocal-filter-object"]);
            $this->_unserialize("reciprocal-filter-object",$res);
        }
        if (array_key_exists("strenuous-array-int",$param) and $param["strenuous-array-int"] !== null) {
            if(is_bool($param["strenuous-array-int"])){
                $this->RequestParams["strenuous-array-int"] = $param["strenuous-array-int"] ? "true" : "false";
            } else {
                $this->RequestParams["strenuous-array-int"] = $param["strenuous-array-int"];
            }
        }
        if (array_key_exists("hypothetical-array-double",$param) and $param["hypothetical-array-double"] !== null) {
            if(is_bool($param["hypothetical-array-double"])){
                $this->RequestParams["hypothetical-array-double"] = $param["hypothetical-array-double"] ? "true" : "false";
            } else {
                $this->RequestParams["hypothetical-array-double"] = $param["hypothetical-array-double"];
            }
        }
        if (array_key_exists("stereotype-array-Int",$param) and $param["stereotype-array-Int"] !== null) {
            if(is_bool($param["stereotype-array-Int"])){
                $this->RequestParams["stereotype-array-Int"] = $param["stereotype-array-Int"] ? "true" : "false";
            } else {
                $this->RequestParams["stereotype-array-Int"] = $param["stereotype-array-Int"];
            }
        }
        if (array_key_exists("unicorn-array-boolean",$param) and $param["unicorn-array-boolean"] !== null) {
            if(is_bool($param["unicorn-array-boolean"])){
                $this->RequestParams["unicorn-array-boolean"] = $param["unicorn-array-boolean"] ? "true" : "false";
            } else {
                $this->RequestParams["unicorn-array-boolean"] = $param["unicorn-array-boolean"];
            }
        }
        if (array_key_exists("phoenix-array-string",$param) and $param["phoenix-array-string"] !== null) {
            if(is_bool($param["phoenix-array-string"])){
                $this->RequestParams["phoenix-array-string"] = $param["phoenix-array-string"] ? "true" : "false";
            } else {
                $this->RequestParams["phoenix-array-string"] = $param["phoenix-array-string"];
            }
        }
        if (array_key_exists("welfwaf-array-object",$param) and $param["welfwaf-array-object"] !== null) {
            if(is_bool($param["welfwaf-array-object"])){
                $this->RequestParams["welfwaf-array-object"] = $param["welfwaf-array-object"] ? "true" : "false";
            } else {
                $this->RequestParams["welfwaf-array-object"] = $param["welfwaf-array-object"];
            }
        }
        if (array_key_exists("filrte.23",$param) and $param["filrte.23"] !== null) {
            if(is_bool($param["filrte.23"])){
                $this->RequestParams["filrte.23"] = $param["filrte.23"] ? "true" : "false";
            } else {
                $this->RequestParams["filrte.23"] = $param["filrte.23"];
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