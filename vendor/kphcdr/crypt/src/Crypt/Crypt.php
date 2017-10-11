<?php
namespace Crypt;
class Crypt
{
    private static $salt = 'ppphp';

    public static function setSalt($salt)
    {
        self::$salt = $salt;
    }

    public static function encrypt($string)
    {
        $skey = str_split(base64_encode(self::$salt));
        $strArr = str_split(base64_encode($string));
        $strCount = count($strArr);
        foreach ($skey as $key => $value) {
            $key < $strCount && $strArr[$key] .= $value;
        }
        return str_replace('=', 'O0O0O', join('', $strArr));
    }

    public static function decrypt($string)
    {
        $skey = str_split(base64_encode(self::$salt));
        $strArr = str_split(str_replace('O0O0O', '=', $string), 2);
        $strCount = count($strArr);
        foreach ($skey as $key => $value) {
            $key < $strCount && $strArr[$key][1] === $value && $strArr[$key] = $strArr[$key][0];
        }
        return base64_decode(join('', $strArr));
    }
}