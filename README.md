# 简介
欢迎使用
# 依赖环境
1. PHP 5.6.0 版本及以上
2. 从控制台 开通相应产品
3. 获取 SecretID、SecretKey 以及调用地址endpoint，具体参考各产品说明。

# 获取安装
安装 PHP SDK 前，先获取安全凭证。在第一次使用云API之前，用户首先需要在控制台上申请安全凭证，安全凭证包括 SecretID 和 SecretKey， SecretID 是用于标识 API 调用者的身份，SecretKey是用于加密签名字符串和服务器端验证签名字符串的密钥。SecretKey 必须严格保管，避免泄露。
## 方式一：通过 Composer 安装
通过 Composer 获取安装是使用 PHP SDK 的推荐方法，Composer 是 PHP 的依赖管理工具，支持您项目所需的依赖项，并将其安装到项目中。关于 Composer 详细可参考 Composer 官网 。
1. 安装Composer：
    windows环境请访问[Composer官网](https://getcomposer.org/download/)下载安装包安装。
    
    unix环境在命令行中执行以下命令安装。
    > curl -sS https://getcomposer.org/installer | php

    > sudo mv composer.phar /usr/local/bin/composer
2. 执行命令 `composer require ksyun/ksyun-sdk-php` 添加依赖。
3. 在代码中添加以下引用代码。注意：如下仅为示例，composer 会在项目根目录下生成 vendor 目录，`/path/to/`为项目根目录的实际绝对路径，如果是在当前目录执行，可以省略绝对路径。
   
    > require '/path/to/vendor/autoload.php';
   
## 下载安装
1. 下载sdk ：
   请访问(https://ksyun.com/)下载安装包安装。
2. 解压文件，将解压的文件(ksyun-sdk-php) 放入你项目中的vendor目录下,如果没有，需在项目根目录创建vendor 目录
3. 修改你项目中的composer文件，添加以下几行
   >   "repositories": [
   {
   "type": "path",
   "url": "vendor/ksyun-php-sdk"
   }
   ]
4. 执行命令
   > composer require ksyun/ksyun-sdk-php:*@dev

5. 在代码中添加以下引用代码。注意：如下仅为示例，composer 会在项目根目录下生成 vendor 目录，`/path/to/`为项目根目录的实际绝对路径，如果是在当前目录执行，可以省略绝对路径。

   > require '/path/to/vendor/autoload.php';



## php_curl 扩展

此 SDK 依赖的 GuzzleHttp 需要开启 php_curl 扩展，查看环境上的 php.ini 环境确认是否已启用，例如在 Linux 环境下，PHP 7.1 版本，托管在 apache 下的服务，可以打开 /etc/php/7.1/apache2/php.ini 中查看 extension=php_curl.dll 配置项是否已被注释，请删除此项配置前的注释符并重启 apache。

现情况不一。可以运行 `php -r "echo sys_get_temp_dir();"` 打印系统默认临时目录绝对路径，然后在 `php.ini` 配置 `sys_temp_dir` 为这个值尝试是否能解决。
