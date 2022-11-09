<?php
namespace IMooc\Database;

use IMooc\Database\IDatabase;

class PDO implements IDatabase
{
    protected $conn;
    public function connect($host, $user, $passwd, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = new \PDO("mysql:host=$host;dbname=$dbname",$user,$passwd);
        $this->conn = $conn;
    }

    public function query($sql)
    {

        return $this->conn->query($sql);
    }

    public function close()
    {
        // TODO: Implement close() method.
        unset($this->conn);
    }
}