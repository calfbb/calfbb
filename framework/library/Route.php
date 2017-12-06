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
        if($route['PATH_INFO']==2){
            $this->pathinfoTwo($route);

        }else if($route['PATH_INFO']==3 && isset($_SERVER['PATH_INFO'])){ //如果路由是第三种模式
            $this->pathinfoTwo($route);
        }else{ //如果路由是第一种模式

            $this->pathinfoOne($route);
        }

    }

    public function pathinfoOne($route)
    {
        global $_G;
        if (isset($_SERVER['QUERY_STRING'])) {

            global $_GPC;
            $this->module=isset($_GPC['m']) ? $_GPC['m'] : conf::get('DEFAULT_MODULE', 'route');
            $this->ctrl=isset($_GPC['c']) ?  $_GPC['c'] : conf::get('DEFAULT_CTRL', 'route');
            $this->action=isset($_GPC['a']) ? $_GPC['a'] : conf::get('DEFAULT_ACTION', 'route');



        }
    }

    public function pathinfoTwo($route)
    {
        global $_GPC;

        if (isset($_SERVER['REQUEST_URI'])) {
            $pathStr = str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['REQUEST_URI']);

            //丢掉?以及后面的参数
            $path = explode('?', $pathStr);

            //去掉多余的分隔符
            $path = explode('/', trim($path[0], '/'));

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
                $_GET['a']=$this->action;
                $_GPC['a']=$this->action;

            }

            $this->path = array_merge($path);

            $pathLenth = count($path);
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
            $this->action = conf::get('DEFAULT_ACTION', 'route');
        }

    }
    public function urlVar($num, $default = false)
    {
        if (isset($this->path[$num])) {
            return $this->path[$num];
        } else {
            return $default;
        }
    }

    public function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}