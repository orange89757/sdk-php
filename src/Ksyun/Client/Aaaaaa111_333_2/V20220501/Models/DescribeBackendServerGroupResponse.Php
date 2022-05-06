<?php
namespace  Ksyun\Client\Aaaaaa111_333_2\V20220501\Models;

use Ksyun\Common\BaseModel;

class DescribeBackendServerGroupResponse extends BaseModel
{
         /** {
    "Data": {
        "List": [
            {
                "Id": 2008790,
                "CreatedTime": "2021-05-21 11:36:40",
                "Title": "test 1",
                "Content": "<html>111111</html>",
                "CategoryId": 6,
                "TypeId": 64,
                "TypeName": "产品服务升级",
                "CategoryName": "产品消息"
            },
            {
                "Id": 2008790,
                "CreatedTime": "2021-05-21 11:36:40",
                "Title": "test 2",
                "Content": "<html>2222</html>",
                "CategoryId": 7,
                "TypeId": 56,
                "TypeName": "运营商割接",
                "CategoryName": "运维消息"
            }
        ],
        "Total": 30109
    },
    "RequestId": "ccd202c2-49a6-447f-9fa9-03eb279d9aa4"
}
```**/
         public  $type-inttype-inttype-inttype-inttype-inttype-inttype-inttype-int;

         /** ### 示例

#### 请求示例

```
http://contact.api.ksyun.com/?
Action=queryInMailList
&Version=2021-07-08
&StartTime=2017-02-28 17:00:00
&EndTime=2017-02-28 18:00:00
&PageNumber=1
&PageSize=10
&CategoryId=6,9
&TypeId=64,30,62
&公共请求参数
```**/
         public  $type-double;

         /** ### 错误码（ 调用不成功）

| 错误代码(Code)   | 错误消息(Message)                                            | HTTP 状态码 | 中文描述（语义）                  |
| :--------------- | :----------------------------------------------------------- | :---------- | :-------------------------------- |
| InvalidParameter | There is one or more invalid parameter(%s).                  | 400         | 参数%s错误,具体参数名在%s说明     |
| MissingParameter | A required parameter for the specified action is not supplied. | 400         | 忘记必选参数%s,具体参数名在%s说明 |**/
         public  $type-Int;

         /** 
### 返回数据（调用成功）

| 名称         | 类型    | 描述                                    |
| ------------ | ------- | --------------------------------------- |
| Data         | Array   | 返回值为我的站内信消息列表数据          |
| List         | Array   | 数据列表                                |
| Id           | Integer | 站内信消息ID                            |
| CreatedTime  | String  | 创建时间                                |
| Title        | String  | 消息主题                                |
| Content      | String  | 消息内容（正文）                        |
| CategoryId   | Integer | 消息分类                                |
| TypeId       | Integer | 消息类型                                |
| TypeName     | String  | 一级消息类型名称                        |
| CategoryName | String  | 消息分类名称                            |
| Total        | Integer | 总条数                                  |
| RequestId    | String  | 接口请求的唯一ID, 每次调用RequestID唯一 |**/
         public  $type-string;

         /** 71：短信服务<br/>- 33：高防IP产品通知<br/>- 48：服务器安全产品信息<br/>- 49：证书产品信息<br/>- 70：告警消息<br/>- 57：平台消息<br/><br/>运维消息（CategoryId=7）<br/>- 17：金山云IDC巡检报障消息<br/>- 56：运营商割接<br/><br/>安全消息（CategoryId=9）<br/>- 62：DDoS攻击告警<br/>- 54：安全预警<br/>- 63：违规通知<br/>- 75：AccessKey定期更新通知（6个月）<br/><br/>活动消息（CategoryId=10）<br/>- 79：营销消息<br/><br/>金山云动态（CategoryId=11）<br/>- 53：营销消息<br/>- 58：政策消息<br/>- 59：客户关怀<br/> |**/
         public  $type-boolean;

         /**Int **/
         public  $type-array-int;

         /**Double ### 请求参数   

| 名称       | 必须 | 类型    | 示例值              | 描述                                                         |
| ---------- | ---- | ------- | ------------------- | ------------------------------------------------------------ |
| Action     | 是   | String  | queryInMailList     | 操作接口名称，系统规定参数，取值：`queryInMailList`          |
| Version    | 是   | String  | 2021-07-08          | API版本，固定为`2021-07-08`                                  |
| StartTime  | 是   | String  | 2017-02-28 17:00:00 | 查询的开始时间，格式：`YYYY-MM-DD HH:MM:SS`                  |**/
         public  $type-array-double;

         /** **/
         public  $type-array-Int;

         /** **/
         public  $type-array-string;

         /** **/
         public  $type-array-Boolean;

         /**Object **/
         public  $type-array-object;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("type-inttype-inttype-inttype-inttype-inttype-inttype-inttype-int",$param) and $param["type-inttype-inttype-inttype-inttype-inttype-inttype-inttype-int"] !== null) {
                $this->type-inttype-inttype-inttype-inttype-inttype-inttype-inttype-int = $param["type-inttype-inttype-inttype-inttype-inttype-inttype-inttype-int"];
            }
            if (array_key_exists("type-double",$param) and $param["type-double"] !== null) {
                $this->type-double = $param["type-double"];
            }
            if (array_key_exists("type-Int",$param) and $param["type-Int"] !== null) {
                $this->type-Int = $param["type-Int"];
            }
            if (array_key_exists("type-string",$param) and $param["type-string"] !== null) {
                $this->type-string = $param["type-string"];
            }
            if (array_key_exists("type-boolean",$param) and $param["type-boolean"] !== null) {
                $this->type-boolean = $param["type-boolean"];
            }
            if (array_key_exists("type-array-int",$param) and $param["type-array-int"] !== null) {
                $this->type-array-int = $param["type-array-int"];
            }
            if (array_key_exists("type-array-double",$param) and $param["type-array-double"] !== null) {
                $this->type-array-double = $param["type-array-double"];
            }
            if (array_key_exists("type-array-Int",$param) and $param["type-array-Int"] !== null) {
                $this->type-array-Int = $param["type-array-Int"];
            }
            if (array_key_exists("type-array-string",$param) and $param["type-array-string"] !== null) {
                $this->type-array-string = $param["type-array-string"];
            }
            if (array_key_exists("type-array-Boolean",$param) and $param["type-array-Boolean"] !== null) {
                $this->type-array-Boolean = $param["type-array-Boolean"];
            }
            if (array_key_exists("type-array-object",$param) and $param["type-array-object"] !== null) {
                $this->type-array-object = $param["type-array-object"];
            }

        }
}