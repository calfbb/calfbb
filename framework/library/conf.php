<?php
/* ========================================================================
 * 加载系统配置类,可以防止重复引入文件
 * ======================================================================== */
namespace  Framework\library;

class conf
{
    /**
     * 用来存储已经加载的配置
     *
     * @var array
     */
    static public $conf = array();
    
    /**
     * 加载系统配置,如果之前已经加载过,那么就直接返回
     * @param string $name 配置名
     * @param string $file 文件名
     * @return mix
     */
    static public function get($name,$file='config')
    {
        /*改写*/
        if(isset(self::$conf[$file][$name])) {
            return self::$conf[$file][$name];
        } else {
            $conf = CALFBB.'/data/'.$file.'.php';
            if(is_file($conf)) {
                self::$conf[$file] = include $conf;
                    return isset(self::$conf[$file][$name])?self::$conf[$file][$name]:false;
            } else {
                return false;
            }
        }
        
    }
    
    /**
     * 加载系统配置文件(直接加载整个配置文件),如果之前已经加载过,那么就直接返回
     * @param string $name 配置名
     * @param string $file 文件名
     * @return mix
     */
    static public function all($file)
    {
        if(isset(self::$conf[$file])) {
            return self::$conf[$file];
        } else {
            $conf = CALFBB.'/data/'.$file.'.php';
            if(is_file($conf)) {
                self::$conf[$file] = include $conf;
                return self::$conf[$file];
            } else {
                return false;
            }
        }

    }

    /**
     * 加载系统配置文件(并赋值给大G),如果之前已经加载过,那么就直接返回
     * @param string $name 配置名
     * @param string $file 文件名
     * @return mix
     */
    static public function G($file)
    {

        global $_G;
        if(isset(self::$conf[$file])) {
            return self::$conf[$file];
        } else {
            $conf = CALFBB.'/data/'.$file.'.php';
            if(is_file($conf)) {
                self::$conf[$file] = include $conf;


                $_G[$file]=self::$conf[$file];
                return self::$conf[$file];
            } else {
                return false;
            }
        }

    }

//    /**
//     * 判断应用是否有单独配置文件
//     */
//    static function appConfig($file){
//        $conf = CALFBB.'/data/'.$file.'.php';
//        if(is_file($conf)) {
//            self::$conf[$file] = include $conf;
//
//
//            $_G[$file]=self::$conf[$file];
//            return self::$conf[$file];
//        } else {
//            return false;
//        }
//    }
}