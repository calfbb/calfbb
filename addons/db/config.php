<?php
/**
 * @package  插件应用配置文件
 * @author   calfbb技术团队
 * Date: 2017/10/13
 * Time: 上午11:53
 */
return array(
    'DEFAULT_PAGE'=>10,//默认分页条数
    'HTTP'=>'http',//协议类型，http或https
    'MASTER'=>'app',//主应用目录,默认app目录
    'ADDONS'=>'addons',//插件应用目录
    'TPL'=>'tpl',//模板应用目录
    'TPL_DEFAULT'=>'bootstrap',//模板的默认目录
    'TPL_STATUS'=>flase,//是否替换主应用模版，开启后程序将从TPL目录下调用模版
    'ATTACHMENT'=>'attachment',//上传附件目录
);