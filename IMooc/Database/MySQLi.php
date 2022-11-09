<?php
namespace IMooc\Database;

use IMooc\Database\IDatabase;

class MySQLi implements IDatabase
{
    protected $conn;
    public function connect($host, $user, $passwd, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = mysqli_connect($host,$user,$passwd,$dbname); //php7 已经废除
        $this->conn = $conn;
    }

    public function query($sql)
    {
        $res = mysqli_query($this->conn,$sql);
        return $res;
    }

    public function close()
    {
        // TODO: Implement close() method.
        mysqli_close($this->conn);
    }
}