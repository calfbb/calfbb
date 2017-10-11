<?php
/**
 * lnmpbao - A PHP Framework For Web Artisans
 *
 * @package  clafbaby
 * @author   牛宝宝技术团队  <baobao@clafbaby.com>
 */
/* ========================================================================
 * niubaobao核心类
 * 实现以下几个功能
 * 类自动加载
 * 启动框架
 * 引入模型
 * 引入视图
 * ======================================================================== */

class niubaobao
{
    /**
     * model用于存放已经加载的model模型,下次加载时直接返回
     */
    public $model;
    /**
     * 视图赋值
     */
    public $assign;
    public $module;
    public $ctrlFile;
    public $ctrlClass;
    public $action;

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
            if (is_file(NIUBAOBAO . '/' . $class . '.php')) {

                include_once NIUBAOBAO . '/' . $class . '.php';
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
        $request = new \Framework\library\route();

        \Framework\library\log::init();

        if($request->route['PATH_INFO']==2){
            $this->pathTwo($request);
        }else{
            $this->pathOne($request);

        }

        //如果是多模块,可以通过动态设置module的形式,动态条用不同模块
//        if (@$_GET['m'] !='web' && @isset($_GET['m'])) {
//            $MODULE_NAME = 'addons\\'.$_GET['m'];
//
//        } else {
//            $MODULE_NAME = $_G['config']['MASTER'];
//
//        }



        if (is_file($this->ctrlFile)) {
            include $this->ctrlFile;


        } else {

            if (DEBUG) {
                throw new Exception($this->ctrlClass . '是一个不存在的控制器');
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

        $ctrl->$action();
    }

    /**
     * pathinfo  1 默认模式  使用？ & 带参数
     */

    public  function pathOne($request){
        global $_G;

        //如果是多模块,可以通过动态设置module的形式,动态条用不同模块
        if (@$_GET['m'] !=$_G['config']['MASTER'] && @isset($_GET['m'])) {
            $MODULE_NAME = 'addons\\'.$_GET['m'];

        } else {
            $MODULE_NAME = $_G['config']['MASTER'];

        }

        $this->ctrlClass = '\\' . $MODULE_NAME . '\controller\\' . $request->ctrl ;

        $this->action = $request->action;
        //系统默认目录

        $this->ctrlFile = APP . 'controller/' . $request->ctrl . '.php';

    }

    /**
     * pathinfo  2 伪静态模式  使用／带参数
     */

    public  function pathTwo($request){

        $MODULE_NAME = $request->module;

        $this->ctrlClass = '\\' . $MODULE_NAME . '\controller\\' . $request->ctrl ;

        $this->action = $request->action;
        //系统默认目录

        $this->ctrlFile = APP . 'controller/' . $request->ctrl . '.php';

    }



    /**
     * 引入函数类
     * @param string func 函数名
     */
    public static function loadFunc($func)
    {

            if (is_file(NIUBAOBAO . '/' . $func . '.php')) {

                include_once CORE .'function/'.$func.'.php';

            }else{

//                CORE .'function/'.$func.'.php'
            }


    }

}