<?php
namespace IMooc;

class Proxy implements IUserProxy
{
    function getUserName($id)
    {
        // TODO: Implement getUserName() method.
        $db = \IMooc\Factory::craeteDatabase('slave');
        $info = $db->query("select name from user where id = '{$id}' limit 1");
    }

    function  setUserName($id, $name)
    {
        // TODO: Implement setUserName() method.
        $db = \IMooc\Factory::craeteDatabase('master');
        $db->query("update user name = '{$name}' where id = '{$id}' limit 1");
    }
}