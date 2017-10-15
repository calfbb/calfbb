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

        $this->display('index/index');
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