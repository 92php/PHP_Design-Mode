<?php

namespace IMooc;

class Loader{

    public static function autoload($class)
    {
        //$file = BASEDIR.'/'.str_replace('\\','/',$class).'.php';
        //var_dump($file);
        require BASEDIR.'/'.str_replace('\\','/',$class).'.php';

    }
}