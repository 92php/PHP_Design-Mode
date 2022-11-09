<?php
namespace IMooc;

class Register
{
    //注册器模式就是将一些对象注册到我们的全局一个树上，可以被任何地方访问

    protected static $objects;
    //可以设置别名
    public static function set($alias,$object)
    {
        self::$objects[$alias] = $object;
    }

    public static function get($name)
    {
        return self::$objects[$name];
    }

    public static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }


}