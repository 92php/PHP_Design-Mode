<?php
namespace IMooc;

//事件的产生着
//抽象类
abstract class EventGenerator
{
    private $observers = array();
    //增加观察者
    function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    //逐个通知观察着
    //通知事件发生了
    function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update();
        }
    }
}