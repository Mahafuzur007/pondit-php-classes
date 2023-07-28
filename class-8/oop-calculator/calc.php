<?php

include './class.php';

$num1 = $_POST['number1'];
$num2 = $_POST['number2'];
$cal = $_POST['calculator'];


$calculator = new Calc($num1, $num2, $cal);
echo $calculator->operator();
