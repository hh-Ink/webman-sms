> 在overtrue/easy-sms上包装而来，方便 webman用户使用，详细使用请参考：https://github.com/overtrue/easy-sms

#### 1.安装
```
composer require hhink/webman-sms
```

#### 2.配置

配置文件位置：config/plugin/hhink/webman-sms
```
use Overtrue\EasySms\Strategies\OrderStrategy;

return [
    'enable' => true,

    // HTTP 请求的超时时间（秒）
    'timeout' => 5.0,

    // 默认发送配置
    'default' => [
        // 网关调用策略，默认：顺序调用
        'strategy' => OrderStrategy::class,

        // 默认可用的发送网关
        'gateways' => [
            'aliyun',
        ],
    ],
    // 可用的网关配置
    'gateways' => [
        'errorlog' => [
            'file' => '/tmp/easy-sms.log',
        ],
        'aliyun' => [
            'access_key_id' => '*****************',
            'access_key_secret' => '***********************',
            'sign_name' => '签名',
        ],
    ],
];
```
详细配置请查看：https://github.com/overtrue/easy-sms

#### 3.基本调用

```

use Hhink\WebmanSms\Sms;

Sms::app()->send('16688866686', [
    'content'  => '您的登录验证码: 032654',
    'template' => 'SMS_101',
    'data' => [
        'code' => 032654
    ],
]);
```