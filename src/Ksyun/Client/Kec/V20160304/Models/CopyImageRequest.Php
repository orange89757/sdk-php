<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CopyImageRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DestinationImageName" => null,
         /**String**/
        "ImageId" => null,
         /**String**/
        "DestinationRegion" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DestinationImageName",$param) and $param["DestinationImageName"] !== null) {
            if(is_bool($param["DestinationImageName"])){
                $this->RequestParams["DestinationImageName"] = $param["DestinationImageName"] ? "true" : "false";
            } else {
                $this->RequestParams["DestinationImageName"] = $param["DestinationImageName"];
            }
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("DestinationRegion",$param) and $param["DestinationRegion"] !== null) {
            if(is_bool($param["DestinationRegion"])){
                $this->RequestParams["DestinationRegion"] = $param["DestinationRegion"] ? "true" : "false";
            } else {
                $this->RequestParams["DestinationRegion"] = $param["DestinationRegion"];
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