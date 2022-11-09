<?php

namespace IMooc;

//颜色装饰器
class ColorDrawDecorator implements DrawDecorator
{
    protected $color;
    function __construct($color = 'red')
    {
        $this->color = $color;
    }

    function beforeDraw()
    {
        // TODO: Implement beforeDraw() method.
        echo "<div style='color:{$this->color};'>";
    }

    function afterDraw()
    {
        // TODO: Implement beforeDraw() method.
        echo "</div>";
    }
}