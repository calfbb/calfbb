<?php

/**
 * lnmpbao - A PHP Framework For Web Artisans
 *
 * @package  lnmpbao
 * @author   宝宝技术团队  <baobao@lnmpbao.com>
 */
function p($var)
{
    if (is_cli()) {
        if (is_array($var) || is_object($var)) {
            dump($var);
        } else {
            echo PHP_EOL;
            echo "\e[31m" . $var . "\e[37m" . PHP_EOL;
            echo PHP_EOL;
        }
    } else {
        if (is_bool($var)) {
            var_dump($var);
        } else if (is_null($var)) {
            var_dump(NULL);
        } else {
            echo "<pre style='position:relative;z-index:1000;padding:10px;border-radius:5px;background:#F5F5F5;border:1px solid #aaa;font-size:14px;line-height:18px;opacity:0.9;'>" . print_r($var, true) . "</pre>";
        }
    }
    exit;
}

function show_json($array){
    header('Content-Type:application/json; charset=utf-8');
    echo json_encode($array);exit;
}

function debug($var)
{
    if (function_exists('dump')) {
        array_walk($var, function ($v) {
            dump($v);
        });
    } else {
        array_walk($var, function ($v) {
            print_r($v);
        });
    }
    exit();
}

function is_cli()
{
    return PHP_SAPI == 'cli';
}

/**
 * 获取get数据
 * @param string $str 变量名
 * @param string $filter 过滤方式 int为只支持int类型
 * @param string $default 默认值 当获取不到值时,所返回的默认值
 * @return mix
 */
function get($str = 'false', $filter = '', $default = false)
{
    if ($str !== false) {
        $return = isset($_GET[$str]) ? $_GET[$str] : false;
        if ($return) {
            switch ($filter) {
                case 'int':
                    if (!is_numeric($return)) {
                        return $default;
                    }
                    break;
                default:
                    $return = htmlspecialchars($return);

            }
            return $return;
        } else {
            return $default;
        }
    } else {
        return $_GET;
    }
}

/**
 * 获取post数据
 * @param $str 变量名
 * @param $filter 过滤方式 int为只支持int类型
 * @param $default 默认值 当获取不到值时,所返回的默认值
 * @return mix
 */
function post($str = false, $filter = '', $default = false)
{
    if ($str !== false) {
        $return = isset($_POST[$str]) ? $_POST[$str] : false;
        if ($return !== false) {
            switch ($filter) {
                case 'int':
                    if (!is_numeric($return)) {
                        return $default;
                    }
                    break;
                default:
                    $return = htmlspecialchars($return);

            }
            return $return;
        } else {
            return $default;
        }
    } else {
        return $_POST;
    }
}

function redirect($str)
{
    header('Location:' . $str);
}

function http_method()
{
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        return 'POST';
    } else {
        return 'GET';
    }
}

function json($array)
{
    header('Content-Type:application/json; charset=utf-8');
    echo json_encode($array);
}

function show404()
{
    header('HTTP/1.1 404 Not Found');
    header("status: 404 Not Found");
    exit();
}


/** web url跳转
 * @param $segment
 * @param array $params
 * @return string
 */
function webUrl($segment, $params = array()){


    list($controller, $action) = explode('/', $segment);
    $url = './index.php?m='.MODULE."&";
    if (!empty($controller)) {
        $url .= "c={$controller}&";
    }
    if (!empty($action)) {
        $params['a']=$action;

    }

    if (!empty($params)) {
        $queryString = http_build_query($params, '', '&');
        $url .= $queryString;
    }
    return $url;
}


/**
 * 构造错误数组
 * @param int $errno 错误码，0为无任何错误
 * @param string $message 错误信息
 * @param mixed $data 返回数据结果
 * @return array
 */
function error($errno, $message = ''){
    return array(
        'errno' => $errno,
        'message' => $message,
    );
}


/**
 * 跳转信息提示
 */
function message($message,$url,$time=3){
    global $_GPC;
    $class=new  \Framework\library\views;
    $class->assign('message',$message);
    $class->assign('url',$url);
    $class->assign('time',(int)$time);

    $module= $_GPC['m'] !="web" ? NIUBAOBAO.'/web/' : '';

    $class->display('common/message.html',$module);
    exit;
}
