<?php

//Public Class

// use Calculator as GlobalCalculator;

// class Calculator
// {
//     public function sum()
//     {
//         echo 'Sum';
//     }

//     public function sub()
//     {
//         echo 'Sub';
//     }
// }

// // $calc = new GlobalCalculator;
// // $calc -> sub();


// //Child Class
// class ScienceticCalculator extends Calculator
// {
//     public function log()
//     {
//         echo 'Sciencetic Calculator';
//     }
// }

// $calculator = new ScienceticCalculator;

// $calculator->sum();

//Private Class

// class Calculator
// {
//     private function sum()
//     {
//         echo 'Sum';
//     }

//     public function result_sum()
//     {
//         return $this->sum();
//     }

//     private function sub()
//     {
//         echo 'Sub';
//     }
//     public function result_sub()
//     {
//         return $this->sub();
//     }
// }

// $calc = new Calculator;
// $calc->result_sum();
// echo "<pre>";
// $calc->result_sub();


//Protected Class

//Parents Class:
class Calculator
{
    protected function sum()
    {
        echo 'Sum';
    }

    protected function sub()
    {
        echo 'Sub';
    }
}

//Child Class:
class ScienceticCalculator extends Calculator
{

    public function result_sum()
    {
        return $this->sum();
    }
    public function result_sub()
    {
        return $this->sub();
    }
}

$calculator = new ScienceticCalculator;

$calculator->result_sum();
$calculator->result_sub();
