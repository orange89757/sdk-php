<?php

namespace Ksyun\Common\Exception;

/**
 * sdk异常类
 * @package App\Ksyun\Common\Exception
 */
class KsyunSDKException extends \Exception
{
    /**
     * @var string 请求id
     */
    private $requestId;

    private $errorCode;


    /**
     * KsyunSDKException constructor.
     * @param string $code 异常错误码
     * @param string $message 异常信息
     * @param string $requestId 请求ID
     */
    public function __construct($code = "", $message = "",  $requestId = "")
    {
        parent::__construct($message, 0);
        $this->errorCode = $code;
        $this->requestId = $requestId;
    }

    /**
     * 返回请求id
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * 返回错误码
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * 格式化输出异常码，异常信息，请求id
     * @return string
     */
    public function __toString()
    {
        echo $this->getMessage() . PHP_EOL;
        echo $this->getErrorCode() . PHP_EOL;
        echo $this->getRequestId() . PHP_EOL;
    }
}

