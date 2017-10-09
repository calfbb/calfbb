<?php

/**
 * lnmpbao - A PHP Framework For Web Artisans
 *
 * @package  lnmpbao
 * @author   宝宝技术团队  <baobao@lnmpbao.com>
 */



/**
 * 获取字符串序列化结果
 * @param mixed $value
 * @return string
 */
function iserializer($value) {
    return serialize($value);
}

/**
 * 获取序列化字符的反序列化结果
 * @param string $value
 * @return mixed
 */
function iunserializer($value) {
    if (empty($value)) {
        return '';
    }
    if (!is_serialized($value)) {
        return $value;
    }
    $result = unserialize($value);
    if ($result === false) {
        $temp = preg_replace_callback('!s:(\d+):"(.*?)";!s', function ($matchs){
            return 's:'.strlen($matchs[2]).':"'.$matchs[2].'";';
        }, $value);
        return unserialize($temp);
    }
    return $result;
}

/**
 * 判断是否为base64加密字符串
 * @param string $str
 * @return boolean
 */
function is_base64($str){
    if(!is_string($str)){
        return false;
    }
    return $str == base64_encode(base64_decode($str));
}

/**
 * 判断是否为序列化字符串
 * @param mixed $data
 * @param boolean $strict
 * @return boolean
 */
function is_serialized($data, $strict = true) {
    if (!is_string($data)) {
        return false;
    }
    $data = trim($data);
    if ('N;' == $data) {
        return true;
    }
    if (strlen($data) < 4) {
        return false;
    }
    if (':' !== $data[1]) {
        return false;
    }
    if ($strict) {
        $lastc = substr($data, -1);
        if (';' !== $lastc && '}' !== $lastc) {
            return false;
        }
    } else {
        $semicolon = strpos($data, ';');
        $brace = strpos($data, '}');
        // Either ; or } must exist.
        if (false === $semicolon && false === $brace)
            return false;
        // But neither must be in the first X characters.
        if (false !== $semicolon && $semicolon < 3)
            return false;
        if (false !== $brace && $brace < 4)
            return false;
    }
    $token = $data[0];
    switch ($token) {
        case 's' :
            if ($strict) {
                if ('"' !== substr($data, -2, 1)) {
                    return false;
                }
            } elseif (false === strpos($data, '"')) {
                return false;
            }
        // or else fall through
        case 'a' :
        case 'O' :
            return (bool)preg_match("/^{$token}:[0-9]+:/s", $data);
        case 'b' :
        case 'i' :
        case 'd' :
            $end = $strict ? '$' : '';
            return (bool)preg_match("/^{$token}:[0-9.E-]+;$end/", $data);
    }
    return false;
}


/**
 * 判断字符串是否包含子串
 * @param string $string 在该字符串中进行查找
 * @param string $find 需要查找的字符串
 * @return boolean
 */
function strexists($string, $find) {
    return !(strpos($string, $find) === FALSE);
}


/**
 * 获取随机字符串
 * @param number $length 字符串长度
 * @param boolean $numeric 是否为纯数字
 * @return string
 */
function random($length, $numeric = FALSE) {
    $seed = base_convert(md5(microtime() . $_SERVER['DOCUMENT_ROOT']), 16, $numeric ? 10 : 35);
    $seed = $numeric ? (str_replace('0', '', $seed) . '012340567890') : ($seed . 'zZ' . strtoupper($seed));
    if ($numeric) {
        $hash = '';
    } else {
        $hash = chr(rand(1, 26) + rand(0, 1) * 32 + 64);
        $length--;
    }
    $max = strlen($seed) - 1;
    for ($i = 0; $i < $length; $i++) {
        $hash .= $seed{mt_rand(0, $max)};
    }
    return $hash;
}

/**
 * 获取字符串序列化结果
 * @param mixed $value
 * @return string
 */
function serializer($value) {
    return serialize($value);
}

/**
 * 获取序列化字符的反序列化结果
 * @param string $value
 * @return mixed
 */
function unserializer($value) {
    if (empty($value)) {
        return '';
    }
    if (!isSerialized($value)) {
        return $value;
    }
    $result = unserialize($value);
    if ($result === false) {
        $temp = preg_replace_callback('!s:(\d+):"(.*?)";!s', function ($matchs){
            return 's:'.strlen($matchs[2]).':"'.$matchs[2].'";';
        }, $value);
        return unserialize($temp);
    }
    return $result;
}


/**
 * 判断是否为序列化字符串
 * @param mixed $data
 * @param boolean $strict
 * @return boolean
 */
function isSerialized($data, $strict = true) {
    if (!is_string($data)) {
        return false;
    }
    $data = trim($data);
    if ('N;' == $data) {
        return true;
    }
    if (strlen($data) < 4) {
        return false;
    }
    if (':' !== $data[1]) {
        return false;
    }
    if ($strict) {
        $lastc = substr($data, -1);
        if (';' !== $lastc && '}' !== $lastc) {
            return false;
        }
    } else {
        $semicolon = strpos($data, ';');
        $brace = strpos($data, '}');
        // Either ; or } must exist.
        if (false === $semicolon && false === $brace)
            return false;
        // But neither must be in the first X characters.
        if (false !== $semicolon && $semicolon < 3)
            return false;
        if (false !== $brace && $brace < 4)
            return false;
    }
    $token = $data[0];
    switch ($token) {
        case 's' :
            if ($strict) {
                if ('"' !== substr($data, -2, 1)) {
                    return false;
                }
            } elseif (false === strpos($data, '"')) {
                return false;
            }
        // or else fall through
        case 'a' :
        case 'O' :
            return (bool)preg_match("/^{$token}:[0-9]+:/s", $data);
        case 'b' :
        case 'i' :
        case 'd' :
            $end = $strict ? '$' : '';
            return (bool)preg_match("/^{$token}:[0-9.E-]+;$end/", $data);
    }
    return false;
}

