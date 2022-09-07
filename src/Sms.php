<?php

namespace Hhink\WebmanSms;

use Overtrue\EasySms\EasySms;

class Sms
{
    public static function app(): EasySms
    {
        $config = config('plugin.hhink.webman-sms.app');
        return new EasySms($config);
    }
}