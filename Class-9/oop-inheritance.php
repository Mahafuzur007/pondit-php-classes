<?php

//inheritance:

//Parent Class
class Calculator
{
    public function sum()
    {
        echo 'Sum';
    }

    public function sub()
    {
        echo 'Sub';
    }
}

//Child Class
class ScienceticCalculator extends Calculator
{
    public function log()
    {
        echo 'Sciencetic Calculator';
    }
}

$calculator = new ScienceticCalculator;

$calculator-> sum();
$calculator-> sub();


