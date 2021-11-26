<?php

namespace Ksyun\Common;

use Ksyun\Common\Exception\KsyunSDKException;
/**
 * 签名类，禁止client引用
 * @package App\Ksyun\Common
 * @throws KsyunSDKException
 */
class Sign
{
    /**
     * @throws KsyunSDKException
     */
    public static function sign($secretKey, $signStr, $signMethod)
    {
        $signMethodMap = ["HMAC-SHA256" => "sha256"];
        if (!array_key_exists($signMethod, $signMethodMap)) {
            throw new KsyunSDKException("signMethod invalid", "signMethod only support (HMAC-SHA256)");
        }
        $signature = hash_hmac($signMethodMap[$signMethod], $signStr, $secretKey);
        return $signature;
    }

}
