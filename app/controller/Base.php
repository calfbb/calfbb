<?php
/**
 * Created by PhpStorm.
 * User: calfbaby
 * Date: 2017-09-16
 * Time: 0:05
 */

namespace App\controller;


class Base
{
    public function __construct()
    {
        $this->verifyLogin();

        $this->verifyProject();
    }


    //验证是否登陆
    public function verifyLogin(){
        global $_G;

           if(empty($_SESSION['user']['nickname']) || empty($_SESSION['user']['uid'])){

               header("Location:".$_G['APP_URL']."?m=web&c=user&a=login");
           }


    }

    //验证是否选择项目
    public function verifyProject(){
        global $_G,$_GPC;
        if(@(!empty($_GPC['project_id']))){
            $project=db_find('project','*',['project_id'=>$_GPC['project_id']]);
            if($project){
                $_SESSION['project']=$project;

            }
        }

        if(empty($_SESSION['project'])){
            header("Location:".$_G['APP_URL']."?m=web&c=project&a=project");
            return;
        }

        if(empty($_G['project'])){
            $_G['project']=$_SESSION['project'];
        }


    }
}