<?php
namespace IMooc;

class MaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        // TODO: Implement showAd() method.
        echo "男装";
    }

    function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo "电子产品";
    }
}