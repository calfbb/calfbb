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
            $this->globalDefined($request);//加载配置
        }else if($request->route['PATH_INFO']==3){

            $this->pathThree($request);
            $this->globalDefined($request);//加载配置

        }else {

            $this->pathOne($request);
            $this->globalDefined($request);//加载配置

        }
        \Framework\library\Log::init();//初始化日志

        include_once CORE .'functions/string.php';
        include_once CORE .'functions/database.php';
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



        $this->action = $request->action;
        $this->ctrlClass = '\\' . $this->moduleName . '\controller\\' . ucwords($request->ctrl) ;
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
     * pathinfo  3 兼容模式
     */

    public  function pathThree($request){
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

        $this->ctrlFile;

    }

    /**
     * 引入函数类
     * @param string func 函数名
     */
    public static function loadFunc($func)
    {

        if (is_file(CALFBB . '/' . $func . '.php')) {

            include_once CORE .'function/'.$func.'.php';

        }
    }

    /**
     * 全局配置函数
     */
    public function globalDefined($request){
        global $_G;
        $moduleName=str_replace('\\', '/', $this->moduleName);
        define('ATTACHMENT_ROOT', CALFBB .'/'.\Framework\library\conf::get('attachdir', 'file').'/');//附件地址绝对路径
        define('APP', CALFBB . '/'.$moduleName.'/');//定义当前模块绝对路径
        define('MODULE',$moduleName);//定义当前模块名
        define('M',$request->module);//定义当前模块名
        define('C',$request->ctrl);//定义当前模块名
        define('A',$request->action);//定义当前模块名
        /**
         * 路由处理
         */
        $scriptName=explode('/',$_SERVER['SCRIPT_NAME']);

        array_shift($scriptName);
        array_pop($scriptName);
        $scriptUrl="";
        if(!empty($scriptName)){
            foreach($scriptName as $v){
                $scriptUrl.="/".$v;
            }
        }
        $http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https' : 'http';
        $indexSuffix="";
        if($request->route['IDENX_SUFFIX']==false){
           $indexSuffix="/index.php";
        }
        define('APP_URL',$http_type."://".$_SERVER['HTTP_HOST'].$scriptUrl.$indexSuffix);
        $_G['APP_URL']=APP_URL;
        $_G['APP']=$http_type."://".$_SERVER['HTTP_HOST'].$scriptUrl.'/'.$moduleName;
        $_G['ATTACHMENT_ROOT']=$http_type."://".$_SERVER['HTTP_HOST'].$scriptUrl.'/'.\Framework\library\conf::get('attachdir', 'file');

        //是否开启独立配置文件
        if($request->route['CONFIG_STATUS']){
            \Framework\library\conf::indepConfig(APP);
        }

    }

}