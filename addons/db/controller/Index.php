<?php
/**
 * 示例控制器
 */
namespace Addons\db\controller;

use  Framework\library\view;


class Index
{
    use view;
    public function index(){

        $this->display('index/index.html');
    }



}