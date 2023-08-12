<?php

abstract class parentClass
{
    abstract protected function sum($a, $b);
    abstract protected function sub($c, $d);
}

class childClass extends parentClass
{

    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function sub($c, $d)
    {
        return $c - $d;
    }
}

$calc = new childClass();
echo $calc->sum(10, 20);
echo '<pre>';
echo $calc->sub(40, 20);
