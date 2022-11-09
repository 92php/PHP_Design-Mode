<?php
namespace IMooc;

//观察者
//接口
interface Observer
{
    //事件发生了，要进行更新操作
    //参数保存事件信息 $event_info
    function update($event_info = null);
}