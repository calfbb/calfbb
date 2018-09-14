<?php
/**
 * @className：插件应用路由文件
 * @description：首页入口，文章页入口，公告页入口，用户中心入口
 * @author:calfbb技术团队
 * Date: 2017/10/13
 */
namespace Addons\db\controller;

use  Framework\library\View;
use  Addons\db\model\User;
use  Framework\library\Cache;
use  Framework\library\Log;
class Index extends  User
{
    use View;
    /**
     * @var string $userName;用户名
     */
    public $userName;

    /**
     * 首页入口
     * @return string
     */
    public function index(){
            global $_G;

        $this->display('index/index');
    }


    public function testRedis(){
        $cache=new Cache();
        $cache->set(123,123);
        echo $cache->get(123);
//        $cache->del(123);
//        echo $cache->get(123);
//        $cache->set(123,123);
//        $cache->clear();
//        echo $cache->get(123);
    }

    public function testLog(){
        $log=new Log();
        $log->debug("test");
        $log->info("test");
        $log->notice("test");
        $log->warning("test");
        $log->error("test");
        $log->critical("test");
        $log->alert("test");
        $log->addlog("diy","test");

    }

    /**
     * 获取用户名字
     * @param int  $id   用户的uid
     * @param bool $status 用户状态
     * @return string | bool  响应用户名
     */
    public function getUserName($uid,$status=true){
            if($uid==66 && $status==true){
                return $this->userName;
            }else{
                return false;
            }
    }



}