<?php
namespace IMooc;

//修改文字大小
class SizeDrawDecorator implements DrawDecorator
{
    protected $size;
    function __construct($size = '14px')
    {
        $this->size = $size;
    }

    function beforeDraw()
    {
        // TODO: Implement beforeDraw() method.
        echo "<div style='font-size:{$this->size};'>";
    }

    function afterDraw()
    {
        // TODO: Implement beforeDraw() method.
        echo "</div>";
    }
}