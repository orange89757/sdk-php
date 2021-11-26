<?php

namespace Ksyun\Common;

/**
 * 证书类，保存认证相关参数
 * @package App\Ksyun\Common
 */
class Credential
{
    /**
     * @var string secretId
     */
    private $secretId;

    /**
     * @var string secretKey
     */
    private $secretKey;

    /**
     * @var string token
     */
    private $signMethod = "HMAC-SHA256";

    /**
     * Credential constructor.
     * @param string $secretId   secretId
     * @param string $secretKey  secretKey
     * @param string $token token
     */
    public function __construct($secretId, $secretKey, $token = null)
    {
        $this->secretId = $secretId;
        $this->secretKey = $secretKey;
    }

    /**
     * 设置secretId
     * @param string $secretId secretId
     */
    public function  setSecretId($secretId)
    {
        $this->secretId = $secretId;
    }

    /**
     * 设置secretKey
     * @param string $secretKey secretKey
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
    }

    /**
     * 获取secretId
     * @return string secretId
     */
    public function getSecretId()
    {
        return $this->secretId;
    }

    /**
     * 获取secretKey
     * @return string secretKey
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * 获取签名方法
     * @return null|string 签名方法
     */
    public function getSignMethod()
    {
        return $this->signMethod;
    }
}
