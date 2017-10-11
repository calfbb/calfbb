<?php
/**
 * 示例控制器
 */
namespace App\controller;

use  Framework\library\view;
use \App\model\UserModel;
class Index extends UserModel
{
   use view;

    //控制台
    public function index()
    {
        global $_G;
     //   $test=$this->pdoTest();
       // p('app下的index方法');
        //$this->display('index/index.html');

    }



}