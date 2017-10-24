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
        global $_GPC;

       $this->display('index/index');

    }

    public function test()
    {
        global $_GPC;
        $m=$this->validate();
        p($m);
        // $this->display('index/index');

    }

    /**
     * Your user-defined validation handling. The exception section is
     * very important and should always be used.
     *
     * @access  private
     * @param   array   $data
     * @return  mixed
     */
    public function validate(array $data = array())
    {
        $data=['name'=>'','email'=>'3010085965@qq.com'];
        $validator = new \Framework\library\Validator($data);
        $validator
            ->required()
            ->integer()
            ->validate('name');
        $validator
            ->required('You must supply an email address.')
            ->email('You must supply a valid email address')
            ->validate('email', 'Email');

        // check for errors
        if ($validator->hasErrors()) {

            p($validator->getAllErrors());



        }

        return $validator->getValidData();
    }
}