<?php

/**
 * calfbb - A PHP Framework For Web Artisans
 *
 * @package  calfbb
 * @author   calfbb技术团队  <baobao@calfbb.com>
 */
function p($var)
{


    if (is_bool($var)) {
        var_dump($var);
    } else if (is_null($var)) {
        var_dump(NULL);
    } else {
        echo "<pre style='position:relative;z-index:1000;padding:10px;border-radius:5px;background:#F5F5F5;border:1px solid #aaa;font-size:14px;line-height:18px;opacity:0.9;'>" . print_r($var, true) . "</pre>";
    }

    exit;
}


/**输出json数据
 * @param $array
 */
function show_json($array){
    header('Content-Type:application/json; charset=utf-8');
    echo json_encode($array);exit;
}




function is_cli()
{
    return PHP_SAPI == 'cli';
}




function http_method()
{
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        return 'POST';
    } else {
        return 'GET';
    }
}

/**
 *@todo: 判断是否为ajax
 */
if(!function_exists('is_ajax')){
    function is_ajax()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH'])=='XMLHTTPREQUEST';
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

/**
 * URL生成
 * @param string            $url 路由地址
 * @param string|array      $param 参数（支持数组和字符串）a=val&b=val2... ['a'=>'val1', 'b'=>'val2']
 * @param string|bool       $suffix 伪静态后缀，默认为true表示获取配置值
 * @return string
 */
function url($url,$param=[],$suffix=true){
    return \Framework\library\Url::build($url,$param,$suffix);
}


/**
 * URL参数生成
 * @param string|array      $param 参数（支持数组和字符串）a=val&b=val2... ['a'=>'val1', 'b'=>'val2']
 * @param string|bool       $suffix 伪静态后缀，默认为true表示获取配置值
 * @return string
 */
function param($param="",$suffix=true){
    return \Framework\library\Url::buildParam($param,$suffix);
}

/**
 * 构造错误数组
 * @param int $code 错误码
 * @param string $message 错误信息
 * @param mixed $data 返回数据结果
 * @return array
 */
function error($code, $data='',$message = 'error'){
    return array(
        'code' => $code,
        'message' => $message,
        'data'=>$data
    );
}

/**
 * 构造成功数组
 * @param int $code 成功码
 * @param string $message 成功信息
 * @param mixed $data 返回数据结果
 * @return array
 */
function success($code, $data='',$message = 'success'){
    return array(
        'code' => $code,
        'message' => $message,
        'data'=>$data
    );
}


if (!function_exists('getallheaders'))
{
    function getallheaders()
    {
        $headers = [];
        foreach ($_SERVER as $name => $value)
        {
            if (substr($name, 0, 5) == 'HTTP_')
            {
                $headers[str_replace(' ', '-', strtoupper(str_replace('_', ' ', substr($name, 5))))] = $value;
            }
        }
        return $headers;
    }
}