<?php

//***By Default PHP is a Single Inheritance Language. It's can't extends two class at a time. By using trait and use we can access multiple class.


trait ParentClassOne
{
    public function callOne()
    {
        echo "Hi, I'm Parent Class One.";
    }
}

trait ParentClassTwo
{
    public function callTwo()
    {
        echo "Hi, I'm Parent Class Two.";
    }
}

class ChildClass
{
    use ParentClassOne, ParentClassTwo;
}

$result = new ChildClass;

$result->callOne();
echo '<pre>';
$result->callTwo();
