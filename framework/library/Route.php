<?php
/* ========================================================================
 * 路由类
 * 主要功能,解析URL
 * ======================================================================== */
namespace  Framework\library;

class Route
{
    public $ctrl;
    public $action;
    public $module;
    public $path;
    public $route;
    public $addons;

    public function __construct()
    {
        $route = conf::all('route');
        $this->route=$route;
        $this->addons=$route['DEFAULT_ADDONS'];
        //如果路由是第二种模式
        if($route['PATH_INFO']==2  && !isset($_GET['m'])){
            $path=$this->analysisVar();
            $this->pathinfoTwo($route,$path);

        }else if($route['PATH_INFO']==3){ //如果路由是第三种模式
            $path=$this->analysisVar();
            if(!empty($path) && !isset($_GET['m'])){
                $this->pathinfoTwo($route,$path);
            }else{
                $this->pathinfoOne($route);
            }

        }else if($route['PATH_INFO']==4) {//如果路由是第四种模式
            $path=$this->analysisVar();
            $result=$this->pathinfoFour($route,$path);
            if($result !=true){
                $this->pathinfoOne($route);
            }
        }else{//如果路由是第一种模式
            $this->pathinfoOne($route);
        }

    }

    public function pathinfoOne($route)
    {
        global $_G,$_GPC;
        if(isset($_GPC['m'])){
            $this->module=$_GPC['m'];
        }else{
            $this->module=conf::get('DEFAULT_MODULE', 'route');
            $_GPC['m']=$this->module;
            $_GET['m']=$this->module;
        }

        if(isset($_GPC['c'])){
            $this->ctrl=$_GPC['c'];
        }else{
            $this->ctrl=conf::get('DEFAULT_CTRL', 'route');
            $_GPC['c']=$this->ctrl;
            $_GET['c']=$this->ctrl;
        }

        if(isset($_GPC['a'])){
            $this->action=$this->delSuffix($_GPC['a']);

        }else{
            $this->action=$this->delSuffix(conf::get('DEFAULT_ACTION', 'route'));
            $_GPC['a']=$this->action;
            $_GET['a']=$this->action;
        }



    }

    public function pathinfoTwo($route,$path)
    {
        global $_GPC;

        if (isset($_SERVER['REQUEST_URI'])) {
            if (isset($path[0]) && $path[0]) {
                $this->module = $path[0];
            } else {
                $this->module = $route['DEFAULT_MODULE'];
            }

            $_GET['m']=$this->module;
            $_GPC['m']=$this->module;
            unset($path[0]);
            if (isset($path[1]) && $path[1]) {
                $this->ctrl = $path[1];
            } else {
                $this->ctrl = $route['DEFAULT_CTRL'];
            }


            $_GET['c']=$this->ctrl;
            $_GPC['c']=$this->ctrl;
            unset($path[1]);

            //检测是否包含路由缩写
            if (@isset($route['ROUTE'][$this->ctrl])) {
                $this->action = $route['ROUTE'][$this->ctrl][2];
                $this->ctrl = $route['ROUTE'][$this->ctrl][1];
            } else {
                if (isset($path[2]) && $path[2]) {
                    $have = strstr($path[2], '?', true);
                    if ($have) {
                        $this->action = $have;
                    } else {
                        $this->action = $path[2];
                    }

                } else {
                    $this->action = $route['DEFAULT_ACTION'];
                }
                unset($path[2]);


            }

            $this->action=$this->delSuffix($this->action);
            $_GET['a']=$this->action;
            $_GPC['a']=$this->action;
            $this->path = array_merge($path);

            $pathLenth = count($path);
            /**
             * 最后一尾参数去掉后缀
             */
            if(@isset($this->path[$pathLenth-1])){
                $this->path[$pathLenth-1]=$this->delSuffix($this->path[$pathLenth-1]);
            }

            $i = 0;
            while ($i < $pathLenth) {
                if (isset($this->path[$i + 1])) {
                    $_GET[$this->path[$i]] = $this->path[$i + 1];
                    $_GPC[$this->path[$i]]=$this->path[$i + 1];
                }
                $i = $i + 2;
            }

        } else {

            $this->module = conf::get('DEFAULT_MODULE', 'route');
            $this->ctrl = conf::get('DEFAULT_CTRL', 'route');
            $this->action = $this->delSuffix(conf::get('DEFAULT_ACTION', 'route'));
            $_GPC['m']=$this->module;
            $_GET['m']=$this->module;
            $_GPC['c']=$this->ctrl;
            $_GET['c']=$this->ctrl;
            $_GPC['a']=$this->action;
            $_GET['a']=$this->action;
        }

    }


    /** 模式四 自定义路由
     * @param $route
     * @param $path
     *
     * @return bool
     */
    public function pathinfoFour($route,$path)
    {
        global $_GPC;
        if(!empty($path)){
            $uri=$this->delSuffix(implode('/',$path));

            $array=conf::all( 'path');
            $newArray=array_keys($array);
            $key="";
            $data=[];
            foreach ($newArray as  $value){
                if (strstr( $uri , $value ) !== false ){

                    $key=$value;
                    $val=explode("-",trim(substr($uri,strlen($value),strlen($uri)-strlen($value)),'-'));
                    break;
                }
            }


            if(!empty($key)){
                $data=$array[$key];
                $paramete=$this->compileParameterNames($data['paramete']);
                $newData=[];
                foreach ($paramete as $k=>$v){
                    if(!empty($val[$k])){
                        $newData[$v]=$val[$k];
                    }

                }
                unset($data['paramete']);

                $data=array_merge($data,$newData);
                foreach ($data as $k=>$v){
                    $_GET[$k]=$v;
                    $_GPC[$k]=$v;
                }
            }

        }

        return false;

    }






    /**
     * Get the parameter names for the route.
     *
     * @return array
     */
    protected function compileParameterNames($uri)
    {
        preg_match_all('-\{(.*?)\}-', $uri, $matches);

        return array_map(function($m) { return trim($m, '?'); }, $matches[1]);
    }

//    /**
//     * Combine a set of parameter matches with the route's keys.
//     *
//     * @param  array  $matches
//     * @return array
//     */
//    protected function matchToKeys(array $matches)
//    {
//        if (count($this->parameterNames()) == 0) return array();
//
//        $parameters = array_intersect_key($matches, array_flip($this->parameterNames()));
//
//        return array_filter($parameters, function($value)
//        {
//            return is_string($value) && strlen($value) > 0;
//        });
//    }
//
//
//    /**
//     * Get the optional parameters for the route.
//     *
//     * @return array
//     */
//    protected function extractOptionalParameters()
//    {
//        preg_match_all('/\{(\w+?)\?\}/', $this->uri, $matches);
//
//        $optional = array();
//
//        if (isset($matches[1]))
//        {
//            foreach ($matches[1] as $key) { $optional[$key] = null; }
//        }
//
//        return $optional;
//    }


    /**
     * 解析url参数
     */
    public function analysisVar(){
        $pathStr = str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['REQUEST_URI'],$count);
        $pathStr2 = str_replace($_SERVER['REQUEST_URI'], '', $_SERVER['SCRIPT_NAME'],$count2);
        //$path=@trim($pathStr,'?');
        $path=@trim($pathStr,'/');
        $str=substr($path,0,1);

        if($count < 1 && $count2 > 0 || $str=="&" || $str=="?"){
            $path=[];
        }else{
            $path = explode('/', $path);

            foreach ($path as $k=>$v){

                $str=substr($v,0,1);
                if($str=="&" || $str=="?"){
                    unset($path[$k]);
                }else{
                    /**
                     * 过滤参数中的？后面字符
                     */
                    $pos = strpos($v,"?");
                    if($pos){
                        $path[$k] = substr($v,0,$pos);
                    }
                }


            }
        }

        return $path;
    }



    /**
     * @param      $num
     * @param bool $default
     *
     * @return bool
     */
    public function urlVar($num, $default = false)
    {
        if (isset($this->path[$num])) {
            return $this->path[$num];
        } else {
            return $default;
        }
    }

    /**
     * @return mixed
     */
    public function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * 删除后缀
     */
    public function delSuffix($action){
        $route = conf::all('route');
        if($route['SUFFIX_STATUS']){
            $action=str_replace($route['SUFFIX'],'',$action);
        }
        return $action;

    }
}