<?php
namespace IMooc;

//迭代器的实现需要继承spl php标准类库中的一个迭代器接口
class AllUser implements \Iterator
{
    protected $ids;
    protected $index; //迭代器的当前位置
    protected $data = array();
    function __construct()
    {
        $db = new Database\MySQLi();
        $db->connect('127.0.0.1','root','root','test');

        $result = $db->query("select id from user");
        $this->ids = $result->fetch_all(MYSQLI_ASSOC);

    }

    //获取当前元素
    public function current()
    {
        $id = $this->ids[$this->index]['id'];
        return Factory::getUser($id);
    }

    //下一个元素
    public function next()
    {
        $this->index ++;
    }

    //验证当前是否还有下一个元素
    public function valid()
    {
        return $this->index < count($this->ids) ;
    }

    //重置整个迭代器
    public function rewind()
    {
        $this->index = 0;
    }

    //表示在迭代器中的位置
    public function key()
    {
        return $this->index;
    }

}