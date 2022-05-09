<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class VerificateCompanyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Action" => null,
         /**String**/
        "Version" => null,
         /**String**/
        "Name" => null,
         /**String**/
        "CardType" => null,
         /**String**/
        "CardId" => null,
         /**String**/
        "CorporateName" => null,
         /**String**/
        "CorporateCardType" => null,
         /**String**/
        "CorporateCardId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            if(is_bool($param["Action"])){
                $this->RequestParams["Action"] = $param["Action"] ? "true" : "false";
            } else {
                $this->RequestParams["Action"] = $param["Action"];
            }
        }
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            if(is_bool($param["Version"])){
                $this->RequestParams["Version"] = $param["Version"] ? "true" : "false";
            } else {
                $this->RequestParams["Version"] = $param["Version"];
            }
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("CardType",$param) and $param["CardType"] !== null) {
            if(is_bool($param["CardType"])){
                $this->RequestParams["CardType"] = $param["CardType"] ? "true" : "false";
            } else {
                $this->RequestParams["CardType"] = $param["CardType"];
            }
        }
        if (array_key_exists("CardId",$param) and $param["CardId"] !== null) {
            if(is_bool($param["CardId"])){
                $this->RequestParams["CardId"] = $param["CardId"] ? "true" : "false";
            } else {
                $this->RequestParams["CardId"] = $param["CardId"];
            }
        }
        if (array_key_exists("CorporateName",$param) and $param["CorporateName"] !== null) {
            if(is_bool($param["CorporateName"])){
                $this->RequestParams["CorporateName"] = $param["CorporateName"] ? "true" : "false";
            } else {
                $this->RequestParams["CorporateName"] = $param["CorporateName"];
            }
        }
        if (array_key_exists("CorporateCardType",$param) and $param["CorporateCardType"] !== null) {
            if(is_bool($param["CorporateCardType"])){
                $this->RequestParams["CorporateCardType"] = $param["CorporateCardType"] ? "true" : "false";
            } else {
                $this->RequestParams["CorporateCardType"] = $param["CorporateCardType"];
            }
        }
        if (array_key_exists("CorporateCardId",$param) and $param["CorporateCardId"] !== null) {
            if(is_bool($param["CorporateCardId"])){
                $this->RequestParams["CorporateCardId"] = $param["CorporateCardId"] ? "true" : "false";
            } else {
                $this->RequestParams["CorporateCardId"] = $param["CorporateCardId"];
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