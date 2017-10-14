<?php
/* ========================================================================
 * 缓存类
 * ======================================================================== */
namespace  framework\library;


class Cache
{
    private $class;
    public function __construct()
    {
            $type = \Framework\library\conf::get('CACHE_TYPE','cache');
            $option = \Framework\library\conf::get('OPTION','cache');
            $class = '\\Framework\\library\\lib\\cache\\'.$type;
            $this->class = new $class($option);
    }

    public function get($name)
    {
        return $this->class->get($name);
    }

    public function set($name, $value, $time = false)
    {
        return $this->class->set($name,$value,$time);
    }

    public function del($name)
    {
        return $this->class->del($name);
    }

    public function clear()
    {
        return $this->class->clear();
    }

}