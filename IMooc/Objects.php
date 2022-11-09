<?php

namespace IMooc;


class Objects
{
    protected $array = array();

	public static function test()
	{
        echo __METHOD__;
	}

	public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        //var_dump(__METHOD__);
        $this->array[$name] = $value;
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        //var_dump(__METHOD__);
        return $this->array[$name];
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        var_dump($name, $arguments);
        return "this is magic method";
    }

    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        var_dump($name, $arguments);
        return "this is magic method";
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return __CLASS__;
    }

    public function __invoke($param)
    {
        // TODO: Implement __invoke() method.
        var_dump($param);
        return "invoke";
    }
}

