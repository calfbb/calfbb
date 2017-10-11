<?php
/**
 * Created by PhpStorm.
 * User: calfbaby
 * Date: 2017-09-28
 * Time: 13:05
 */

namespace Addons\db\controller;

use  Framework\library\view;
class Columnar
{
    use view;

    /**
     * 柱状图
     */
    public function index(){
        $this->display('columnar/index.html');
    }

}