<?php
/**
 * @ClassName:引擎核心类
 * @description：实现几个功能，类自动加载、启动框架、引入模型、引入视图
 * @author:calfbb技术团队
 * Date: 2017/10/12
 */
namespace  framework;

class Calfbb
{

    public $model;/** model用于存放已经加载的model模型,下次加载时直接返回*/
    public $assign;/** 视图赋值*/
    public $module;/** 访问模块*/
    public $moduleName;/** 访问模块名*/
    public $ctrlFile;/** 访问文件路径*/
    public $ctrlClass;/** 访问类*/
    public $action;/** 访问方法*/

    /**
     * 自动加载类
     * @param string $class 需要加载的类,需要带上命名空间
     */
    public static function load($class)
    {

        $class = lcfirst(str_replace('\\', '/', trim($class, '\\')));

        if (is_file(CORE . $class . '.php')) {

            include_once CORE . $class . '.php';
        } else {
            if (is_file(CALFBB . '/' . $class . '.php')) {

                include_once CALFBB . '/' . $class . '.php';
            }
        }
    }

    /**
     * 框架启动方法,完成了两件事情
     * 1.加载route解析当前URL
     * 2.找到对应的控制以及方法,并运行
     */
    public  function run()
    {
        global $_G;

        $request = new \Framework\library\Route();


        //切换访问模式
        if($request->route['PATH_INFO']==2){

            $this->pathTwo($request);
            $this->globalDefined();//加载配置
        }else if($request->route['PATH_INFO']==3 && @(!isset($_GET['m']))){

            $this->pathThree($request);
            $this->globalDefined();//加载配置
            return ;
        }else {
            $this->pathOne($request);
            $this->globalDefined();//加载配置

        }
        \Framework\library\Log::init();//初始化日志

        include_once CORE .'functions/string.php';
        include_once CORE .'functions/database.php';
        include_once CORE .'functions/code.php';
        //此函数加载需要上配置文件之下
        include_once CORE .'functions/function.php';
        // 开始替换\为/
        $this->ctrlFile = str_replace('\\', '/', $this->ctrlFile);

        if (is_file($this->ctrlFile)) {

            include $this->ctrlFile;

        } else {

            if (DEBUG) {
                throw new \Exception($this->ctrlClass . '是一个不存在的控制器');
            } else {
                show404();
            }
        }
        $ctrl = new $this->ctrlClass();
        $action = $this->action;
        //如果开启restful,那么加载方法时带上请求类型
        if (\Framework\library\conf::get('OPEN_RESTFUL', 'system')) {
            $action = strtolower($request->method()) . ucfirst($action);
        }


        //检测方法是否存在
        if(method_exists($ctrl,$action)){
            $ctrl->$action();
        }else{
            throw new \Exception($action . '是一个不存在的方法');
        }




    }

    /**
     * pathinfo  1 默认模式  使用？ & 带参数
     */

    public  function pathOne($request){
        global $_G;

        //如果是多模块,可以通过动态设置module的形式,动态条用不同模块
        if (@$_GET['m'] !=$request->route['DEFAULT_MODULE'] && @isset($_GET['m'])) {
            $this->moduleName = $request->route['DEFAULT_ADDONS'].'\\'.$_GET['m'];

        } else {

            $this->moduleName = $request->module;

        }

        $this->ctrlClass = '\\' . $this->moduleName . '\controller\\' . ucwords($request->ctrl) ;

        $this->action = $request->action;
        //系统默认目录

         $this->ctrlFile = CALFBB . '/'.$this->moduleName.'/' . 'controller/' . ucwords($request->ctrl) . '.php';


    }

    /**
     * pathinfo  2 伪静态模式  使用／带参数
     */

    public  function pathTwo($request){

        //如果是多模块,可以通过动态设置module的形式,动态条用不同模块
        if ($request->module != $request->route['DEFAULT_MODULE']) {
            $this->moduleName = $request->route['DEFAULT_ADDONS'].'\\'.$request->module;

        } else {

            $this->moduleName = $request->module;

        }



        $this->ctrlClass = '\\' . $this->moduleName . '\controller\\' . ucwords($request->ctrl) ;

        $this->action = $request->action;
        //系统默认目录

        $this->ctrlFile =CALFBB . '/'.$this->moduleName.'/' . 'controller/' . ucwords($request->ctrl) . '.php';


    }

    /**
     * pathinfo  3 api开发模式  使用／带参数
     */

    public  function pathThree($request){
        //如果是多模块,可以通过动态设置module的形式,动态条用不同模块
        if ($request->module != $request->route['DEFAULT_MODULE']) {
            $this->moduleName = $request->route['DEFAULT_ADDONS'].'\\'.$request->module;

        } else {

            $this->moduleName = $request->module;

        }

        $view=new \Framework\library\Views;

        $view->display($request->ctrl.'/'.$request->action);


    }

    /**
     * 引入函数类
     * @param string func 函数名
     */
    public static function loadFunc($func)
    {

            if (is_file(CALFBB . '/' . $func . '.php')) {

                include_once CORE .'function/'.$func.'.php';

            }else{

//                CORE .'function/'.$func.'.php'
            }


    }

    /**
     * 全局配置函数
     */
    public function globalDefined(){
        global $_G;
         define('ATTACHMENT_ROOT', CALFBB .'/'.\Framework\library\conf::get('attachdir', 'file').'/');//附件地址绝对路径
         define('APP', CALFBB . '/'.$this->moduleName.'/');//定义当前模块绝对路径
         define('MODULE', $this->moduleName);//定义当前模块名

        if($_G['config']['HTTP']){
            if(!empty($_G['config']['MASTER'])){
                define('APP_URL',$_G['config']['HTTP']."://".$_SERVER['HTTP_HOST'].$this->module.'/index.php');

            }else{
                define('APP_URL',$_G['config']['HTTP']."://".$_SERVER['HTTP_HOST'].'/index.php');

            }
        }else{
            define('APP_URL','./index.php');
        }

        $_G['APP_URL']=APP_URL;
        if(!empty($_G['config']['MASTER'])){
            $_G['APP']=$_G['config']['HTTP']."://".$_SERVER['HTTP_HOST'].'/'.$this->module;
        }else{
            $_G['APP']=$_G['config']['HTTP']."://".$_SERVER['HTTP_HOST'].'/';
        }

        $_G['ATTACHMENT_ROOT']=$_G['config']['HTTP']."://".$_SERVER['HTTP_HOST'].'/'.\Framework\library\conf::get('attachdir', 'file');

    }

}