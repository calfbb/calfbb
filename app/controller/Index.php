<?php
/**
 * 示例控制器
 */
namespace App\controller;

use  Framework\library\view;

class Index
{
   use view;

    //控制台
    public function index()
    {
        global $_G;

        $this->display('index/index.html');

    }



}