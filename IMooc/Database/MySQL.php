<?php
namespace IMooc\Database;

use IMooc\Database\IDatabase;

class MySQL implements IDatabase
{
    protected $conn;
    public function connect($host, $user, $passwd, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = mysql_connect($host,$user,$passwd); //php7 已经废除
        mysql_select_db($dbname,$conn);
        $this->conn = $conn;
    }

    public function query($sql)
    {
         $res = mysql_query($sql,$this->conn);
         return $res;
    }

    public function close()
    {
        // TODO: Implement close() method.
        mysql_close($this->conn);
    }
}