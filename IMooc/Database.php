<?php
namespace IMooc;


class Database
{
    //设计成单例模式
    protected static $db;

    //构造方法私有化
    private function __construct()
    {

    }

    //静态方法获取实例
    public static function getInstance()
    {
        if(self::$db){
            return self::$db;
        }else{
            self::$db = new self();
            return self::$db;
        }

    }

    public function where($where)
    {
        return $this;
    }

    public function order($order)
    {
        return $this;
    }

    public function limit($limit)
    {
        return $this;
    }

}