<?php
//路由配置
return array(
    'DEFAULT_MODULE'=>'app',//默认模块
    'DEFAULT_CTRL'=>'index',//默认控制器
    'DEFAULT_ACTION'=>'index',//默认方法
    'PATH_INFO'=>3,//URL模式 默认1 普通模式  2伪静态模式  3API开发模式
    'DEFAULT_ADDONS'=>'addons',//插件存放目录
    'TPL'=>'tpl',//模板应用目录
    'TPL_DEFAULT'=>'bootstrap',//模板的默认目录
    'TPL_STATUS'=>false,//是否替换应用模版，开启后程序将从TPL目录下调用模版
    'CONFIG_STATUS'=>true,//是否开启模块独立配置文件，开启后模块下的config.php的配置将覆盖data下的配置文件
    'SUFFIX'=>'.html',//伪静态后缀名
    'SUFFIX_STATUS'=>true,//是否开启伪静态是加后缀
    'IDENX_SUFFIX'=>false,//APP_URL(获取完整模块url)中是否隐藏index.php false 不隐藏
    //特别说明：IDENX_SUFFIX用于支持伪静态,网站不可配置在二级目录中 如http://test.calfbbs.com/calfbbs/index.php
    'TPL' => 'tpl',
    'TPL_APP' =>
        array (
            'TPL_DEFAULT' => 'bootstrap',
            'TPL_STATUS' => false,
        ),
    'TPL_ADDONS' =>
        array (
            'admin' =>
                array (
                    'TPL_DEFAULT' => 'bootstrap',
                    'TPL_STATUS' => false,
                ),
            'api' =>
                array (
                    'TPL_DEFAULT' => 'bootstrap',
                    'TPL_STATUS' => false,
                ),
        ),
);