<?php
namespace IMooc;

class User
{
    public $id;
    public $name;
    public $mobile;
    public $regtime;
    public $num;

    protected  $db;

    public function __construct($id = 1)
    {
        $this->db = new Database\MySQLi();
        $this->db->connect('127.0.0.1','root','root','test');
        $res = $this->db->query("select * from user where id={$id} limit 1");
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->regtime = $data['regtime'];
        $this->num = $data['num'];

        //$this->db->close();
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->db->query("update user set name = '{$this->name}',mobile = '{$this->mobile}',regtime='{$this->regtime}',num='{$this->num}' where id = {$this->id} limit 1");

    }
}