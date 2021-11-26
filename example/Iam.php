<?php
require_once __DIR__ . '/../../vendor/autoload.php';
// 导入对应产品模块的client
use Ksyun\Iam\V20151101\IamClient;
// 导入要请求接口对应的Request类
use Ksyun\Iam\V20151101\Models\ListUsersRequest;
use Ksyun\Common\Exception\KsyunSDKException;
use Ksyun\Common\Credential;
// 导入可选配置类
use Ksyun\Common\Http\HttpOptions;

try {
    // 实例化一个证书对象，入参需要传入secretId，secretKey
    $cred = new Credential(getenv("KSYUN_SECRETID"), getenv("KSYUN_SECRETKEY"));

    // 实例化一个http选项，可选的，没有特殊需求可以跳过
    $httpOptions = new HttpOptions("http://","127.0.0.1","GET");

    $client = new IamClient($cred, "default", $httpOptions);

    // 实例化一个请求对象,每个接口都会对应一个request对象。
    $req = new ListUsersRequest();

    // 这里还支持以标准json格式的string来赋值请求参数的方式。下面的代码跟上面的参数赋值是等效的
    $params = [
                "Marker" => "10",
                "MaxItems" => 10
    ];
    $req->setParams($params);

    // 通过client对象调用ListUsers 方法发起请求。注意请求方法名与请求对象是对应的
    // 返回的resp是一个ListUsersResponse类的实例，与请求对象对应
    $resp = $client->ListUsers($req);

    // 输出json格式的字符串回包
    var_dump($resp->toJsonString());

}
catch(KsyunSDKException $e) {
    echo $e;
}
