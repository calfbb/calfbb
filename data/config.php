<?php
//主配置文件
return array(
    'HTTP'=>'http',//协议类型，http或https
    'MASTER'=>'app',//主应用目录,默认app目录
    'ADDONS'=>'addons',//插件应用目录
    'TPL'=>'tpl',//模板应用目录
    'TPL_DEFAULT'=>'bootstrap',//模板的默认目录
    'TPL_STATUS'=>false,//是否替换应用模版，开启后程序将从TPL目录下调用模版
    'CONFIG_STATUS'=>false,//是否开启模块独立配置文件，开启后模块下的config.php的配置将覆盖data下的配置文件
);