<?php
/* ========================================================================
 * Url类
 * 主要功能,生成URL
 * ======================================================================== */

namespace framework\library;

class Url{
    public  static $ctrl;
    public  static $action;
    public  static $module;
    public  static $mode;
    /**
     * URL生成
     * @param string            $url 路由地址
     * @param string|array      $param 参数（支持数组和字符串）a=val&b=val2... ['a'=>'val1', 'b'=>'val2']
     * @param string|bool       $suffix 伪静态后缀，默认为true表示获取配置值
     * @param boolean|string    $domain 是否显示域名 或者直接传入域名
     * @return string
     */
    public static  function build($url,$param=[],$suffix=true){


        // 解析路由参数
        if (is_string($url)) {
            $url=trim($url,'/');
            $url=explode('/',$url);
        }

        if(!is_array($url)){
          return   error(-1,'url参数传入错误');
        }

        $route = conf::all('route');

        if(self::getMode($route)=="PATH_INFO"){
            $url=self::pathinfoTwo($url,$route,$param,$suffix);
            $url=$url.self::buildParam($param,$suffix,$route);
        }else{
            $url=self::pathinfoOne($url,$route,$param,$suffix);
            $url=$url.self::buildParam($param,$suffix,$route);
        }

        return APP_URL.$url;
    }

    /**判断请求模式
     * @param $route
     *
     * @return string
     */
    public static function getMode($route){
        if(!self::$mode){
            //如果是伪静态模式
            if($route['PATH_INFO']==2 || ($route['PATH_INFO']==3 && isset($_SERVER['PATH_INFO']))){

                self::$mode="PATH_INFO";

            }else{
                self::$mode="NORMAL";
            }
        }
            return self::$mode;
    }
    /** 普通模式
     * @param $url
     * @param $route
     *
     * @return string
     */
    public static function pathinfoOne($url,$route,$param,$suffix){

        $urlCount=count($url);
        if($urlCount ==3){
            self::$module=@$url['m'] ? $url['m'] : $url[0];
            self::$ctrl=@$url['c'] ? $url['c'] : $url[1];
            self::$action=@$url['a'] ? $url['a'] : $url[2];
        }else if($urlCount ==2){
            self::$module=M;
            self::$ctrl=@$url['c'] ? $url['c'] : $url[0];
            self::$action=@$url['a'] ? $url['a'] : $url[1];
        }else{
            self::$module=M;
            self::$ctrl=C;
            self::$action=@$url['a'] ? $url['a'] : $url[0];
        }

        return  "?m=".self::$module."&c=".self::$ctrl."&a=".self::$action;
    }

    /**伪静态模式
     * @param $url
     * @param $route
     * @param $param
     * @param $suffix
     *
     * @return string
     */
    public static function pathinfoTwo($url,$route,$param,$suffix){
        $urlCount=count($url);
        if($urlCount ==3){
            self::$module=@$url['m'] ? $url['m'] : $url[0];
            self::$ctrl=@$url['c'] ? $url['c'] : $url[1];
            self::$action=@$url['a'] ? $url['a'] : $url[2];
        }else if($urlCount ==2){
            self::$module=M;
            self::$ctrl=@$url['c'] ? $url['c'] : $url[0];
            self::$action=@$url['a'] ? $url['a'] : $url[1];
        }else{
            self::$module=M;
            self::$ctrl=C;
            self::$action=@$url['a'] ? $url['a'] : $url[0];
        }
        return  "/".self::$module."/".self::$ctrl."/".self::$action;
    }

    /** 解析参数
     * @param     $param
     * @param     $route
     * @param int $type
     * @param     $suffix
     *
     * @return string
     */
    public static function buildParam($param,$suffix,$route=""){
        if(!$route){
            $route = conf::all('route');
        }

        // 解析参数
        if (is_string($param)) {
            $param=ltrim($param,'?');
            parse_str($param, $param);
        }
        if(!is_array($param) && $param !=""){
            return   error(-1,'参数传入错误');
        }

        if(self::getMode($route)=="NORMAL"){
            $str="";
            foreach($param as $key=>$value){
                $str.="&{$key}=$value";
            }
            return  $str;
        }else{
            $str="";
            foreach($param as $key=>$value){
                $str.="/{$key}/$value";
            }
            $suffixs="";
            if($suffix && $route['SUFFIX_STATUS']){
                $suffixs=$route['SUFFIX'];
            }
            return  $str.$suffixs;
        }
    }
}