<?php
namespace IMooc;

class Factory{

    public static function craeteDatabase()
    {
        //$db = new Database();
        $db = Database::getInstance();
        Register::set('db1',$db);
        return $db;
    }

    public static function getUser($id)
    {
        //$user = new User(1);
        //return $user;

        $key = 'user_'.$id;
        $user = Register::get($key);
        if(!$user){
            $user = new User($id);
            Register::set($key,$user);
        }
        return $user;

    }
}