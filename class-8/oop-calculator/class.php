<?php
class Calc
{
    public $numb1;
    public $numb2;
    public $calc;

    public function __construct($number1, $number2, $calculator)
    {
        $this->numb1 = $number1;
        $this->numb2 = $number2;
        $this->calc = $calculator;
    }

    public function operator()
    {
        switch ($this->calc) {
            case "add":
                $result = $this->numb1 + $this->numb2;
                break;
            case "sub":
                $result = $this->numb1 - $this->numb2;
                break;
            case "multi":
                $result = $this->numb1 * $this->numb2;
                break;
            case "div":
                $result = $this->numb1 / $this->numb2;
                break;
            default:
                $result = "Calculation Error";
                break;
        }
        return $result;
    }
}
