<?php
namespace  Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;

class VerificatePersonRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Name" => null,
         /**String**/
        "CardType" => null,
         /**String**/
        "CardId" => null,
         /**String**/
        "CardFrontPic" => null,
         /**String**/
        "CardReversePic" => null,
         /**String**/
        "CardHoldPic" => null,
         /**String**/
        "Action" => null,
         /**String**/
        "Version" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
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
        if (array_key_exists("CardFrontPic",$param) and $param["CardFrontPic"] !== null) {
            if(is_bool($param["CardFrontPic"])){
                $this->RequestParams["CardFrontPic"] = $param["CardFrontPic"] ? "true" : "false";
            } else {
                $this->RequestParams["CardFrontPic"] = $param["CardFrontPic"];
            }
        }
        if (array_key_exists("CardReversePic",$param) and $param["CardReversePic"] !== null) {
            if(is_bool($param["CardReversePic"])){
                $this->RequestParams["CardReversePic"] = $param["CardReversePic"] ? "true" : "false";
            } else {
                $this->RequestParams["CardReversePic"] = $param["CardReversePic"];
            }
        }
        if (array_key_exists("CardHoldPic",$param) and $param["CardHoldPic"] !== null) {
            if(is_bool($param["CardHoldPic"])){
                $this->RequestParams["CardHoldPic"] = $param["CardHoldPic"] ? "true" : "false";
            } else {
                $this->RequestParams["CardHoldPic"] = $param["CardHoldPic"];
            }
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