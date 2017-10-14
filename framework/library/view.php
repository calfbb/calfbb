<?php

namespace  framework\library;

trait View
{
    public $assign="";
    /**
     * 初始化产量
     */
    public function __construct()
    {
        global $_G,$_GPC;
        $this->assign['_G']=$_G;
        $this->assign['_GPC']=$_GPC;
        $this->assign['APP_URL']=$_G['APP_URL'];
        $this->assign['APP']=$_G['APP'];
    }

    /**
     * 为模板对象赋值
     */
    public function assign($name, $data)
    {
        $this->assign[$name] = $data;
    }

    /**
     * 用于在控制器中加载一个模板文件
     */
    public function display($file,$module="")
    {
        global $_G;

        if($_G['config']['TPL_STATUS']==true){//如果开启模版机制

            $module= $module !="" ? $module  : CALFBB;
            $module=str_replace('\\', '/', $module);
            $module=$module .'/'.$_G['config']['TPL'].'/'.$_G['config']['TPL_DEFAULT']. '/';
        }else{
            $module= $module !="" ? $module  : APP;
            $module=str_replace('\\', '/', $module);
            $module=$module . 'template/';
        }

        if (is_file($module. $file.".html")) {
            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem($module);
            $twig = new \Twig_Environment($loader, [
                'cache' => CALFBB . '/data/cache/'.MODULE.'/template',
                'debug' => DEBUG,
            ]);

            $template = $twig->loadTemplate($file.".html");
            $template->display($this->assign ? $this->assign : []);
        } else {
            if (DEBUG) {
                throw new \Exception($file.".html" . '是一个不存在的模板文件');
            } else {
                show404();
            }
        }
    }
}



