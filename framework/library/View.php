<?php

namespace  framework\library;

trait View
{
    public $assign=[];
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
        global $_G,$_GPC;
        /**
         * 初始化常量
         */
        $this->assign['_G']=$_G;
        $this->assign['_GPC']=$_GPC;
        $this->assign['APP_URL']=$_G['APP_URL'];
        $this->assign['APP']=$_G['APP'];
        /**
         * 配置路由
         */
        $route=\Framework\library\conf::all('route');

        /**
         * 如果是主应用
         */
        if(M==$route['DEFAULT_MODULE']){

            $route['TPL_APP']['TPL_DEFAULT']=trim($route['TPL_APP']['TPL_DEFAULT']);
            if(@$route['TPL_APP']['TPL_STATUS']==true &&  !empty($route['TPL_APP']['TPL_DEFAULT'])){//如果开启模版机制
                $module= $module !="" ? $module  : CALFBB;
                $module=str_replace('\\', '/', $module);
                $module=$module .'/'.$route['TPL'].'/'.$route['DEFAULT_MODULE']."/".$route['TPL_APP']['TPL_DEFAULT']. '/';
            }else{
                $module= $module !="" ? $module  : APP;
                $module=str_replace('\\', '/', $module);
                $module=$module . 'template/';
            }
        }else{//如果是插件应用
            $route['TPL_ADDONS'][M]=@$route['TPL_ADDONS'][M] ? $route['TPL_ADDONS'][M] : "";
            if(!empty($route['TPL_ADDONS'][M])){
                $route['TPL_ADDONS'][M]['TPL_DEFAULT']=trim($route['TPL_ADDONS'][M]['TPL_DEFAULT']);
                if(@$route['TPL_ADDONS'][M]['TPL_STATUS']==true &&  !empty($route['TPL_ADDONS'][M]['TPL_DEFAULT'])){//如果开启模版机
                    $module= $module !="" ? $module  : CALFBB;
                    $module=str_replace('\\', '/', $module);
                    $module=$module .'/'.$route['TPL'].'/'.M."/".$route['TPL_ADDONS'][M]['TPL_DEFAULT']. '/';
                }else{
                    $module= $module !="" ? $module  : APP;
                    $module=str_replace('\\', '/', $module);
                    $module=$module . 'template/';
                }
            }else{
                $module= $module !="" ? $module  : APP;
                $module=str_replace('\\', '/', $module);
                $module=$module . 'template/';
            }

        }




        if (is_file($module. $file.".html")) {
            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem($module);
            $twig = new \Twig_Environment($loader, [
                'cache' => CALFBB . '/data/cache/'.str_replace('\\', '/', MODULE).'/template',
                'debug' => DEBUG,
            ]);

            $twig->addGlobal('G', new G());

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

/** 模版引擎用于获取系统常量扩展
 * Class G
 * @package framework\library
 */
class G{
    public $G;
    public $GPC;
    public $APP_URL;
    public $APP;
    public $ATTACHMENT_ROOT;
    public $M;
    public $C;
    public $A;
    public function __construct()
    {
        global $_G,$_GPC;
        /**
         * 初始化常量
         */
        $this->G=$_G;
        $this->GPC=$_GPC;
        $this->APP_URL=$_G['APP_URL'];
        $this->APP=$_G['APP'];
        $this->ATTACHMENT_ROOT=$_G['ATTACHMENT_ROOT'];
        $this->M=M;
        $this->C=C;
        $this->A=A;
    }

    /**
     * URL生成
     * @param string            $url 路由地址
     * @param string|array      $param 参数（支持数组和字符串）a=val&b=val2... ['a'=>'val1', 'b'=>'val2']
     * @param string|bool       $suffix 伪静态后缀，默认为true表示获取配置值
     * @return string
     */
    public function url($url,$param=[],$suffix=true){

        return url($url,$param,$suffix);
    }

    /**
     * URL参数生成
     * @param string|array      $param 参数（支持数组和字符串）a=val&b=val2... ['a'=>'val1', 'b'=>'val2']
     * @param string|bool       $suffix 伪静态后缀，默认为true表示获取配置值
     * @return string
     */
    public function param($param,$suffix=true){

        return param($param,$suffix);
    }
}



