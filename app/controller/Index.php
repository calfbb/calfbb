<?php
/**
 * @className：示例控制器
 * @description：首页入口，加载首页模版
 * @author:calfbb技术团队
 * Date: 2017/10/13
 */
namespace App\controller;

use  Framework\library\View;
use \App\model\User;
class Index extends User
{
   use View;

    //控制台
    public function index()
    {
        global $_G;
        
        $this->display('index/index');

    }



}