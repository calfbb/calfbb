<?php
/**
 * @FileName：框架引擎启动文件
 * @description：加载核心配置，初始化路由，引入核心函数库
 * @author:calfbb技术团队
 * Date: 2017/10/13
 */
session_start();
header("Content-type:text/html;charset=utf-8");
$_G = $_GPC = array();
//合并get  与post请求
$_GPC=array_merge($_GET,$_POST,$_COOKIE);

ini_set('display_errors',true);


require __DIR__ . '/../vendor/autoload.php';//载入composer

/* ========================================================================
 * 常量配置
 * ======================================================================== */

define('CALFBB', realpath(__DIR__.'/../'));    // 根目录
//系统路径
define('CORE', CALFBB . '/framework/');



define('TIME', $_SERVER['REQUEST_TIME']);
define('CALFBB_VERSION','0.1.0');



//加载类库


//加载核心文件
include_once CORE . 'Calfbb.php';


//注册自动加载
spl_autoload_register('\framework\Calfbb::load');

//加载主配置文件
\Framework\library\Conf::G('config');
\Framework\library\Conf::G('database');




//设置默认时区
date_default_timezone_set(\Framework\library\Conf::get('TIMEZONE','system'));

//定义是否开启调试模式
define('DEBUG',\Framework\library\Conf::get('DEBUG','config'));//调试模式
//错误提示
if(DEBUG) {

    ini_set('display_errors',true);

} else {
    ini_set('display_errors',false);
}


//开始跑框架
$calfbb=new \framework\Calfbb;
$calfbb->run();





