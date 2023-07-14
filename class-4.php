<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Class-4</title>
</head>
<body>
<?php

// index_array:
$students = [
    'messi',
    'dimaria',
    'dibu'
];
echo "<pre>";
print_r($students);
var_dump($students);

// associative_array:
$students = [
    'stud1' => 'messi',
    'stud2' => 'dimaria',
    'stud3' => 'dibu'
];
echo "<pre>";
print_r($students);
var_dump($students);
echo $students ['stud3'];

for_loop:
$students = [
    '0' => 'messi',
    '1' => 'dimaria',
    '2' => 'dibu'
];
echo "<pre>";
print_r($students);
for($i=0; $i<3 ; $i++){
    echo $students [$i] ."<pre>";
}

// count_function:
$students = [
    '0' => 'messi',
    '1' => 'dimaria',
    '2' => 'dibu'
];

for($i=0; $i<count($students) ; $i++){
    echo $students [$i] ."<pre>";
}

for($i=0, $elements = count($students); $i<$elements ; $i++){
    echo $students [$i] ."<pre>";
}

// foreach_loop:
$students = [
    'stu0' => 'messi',
    'stu1' => 'dimaria',
    'stu2' => 'dibu'
];

$students = [
    '0' => 'messi',
    '1' => 'dimaria',
    '2' => 'dibu'
];
foreach($students as $index=>$name){
    echo $index.'- '.$name."<pre>";
}


// multidimensional_array/multiple array:
$departments = [
    'bba' => ['ronaldo','mbappe'],
    'cse' => ['messi' , 'benzema']
];

echo"<pre>";
print_r($departments);

foreach($departments as $departmentKey => $departmentValue){
    echo $departmentKey;
    echo strtoupper($departmentKey)."<br>"; // ["strtoupper for Uppercase function"]
    foreach($departmentValue as $index => $value){
        echo (($index+1)."-".$value)."<br>";
    }
}


// Constraints:
define('student_name','Messi'); // define(Name,value)
echo student_name;

// Tarnary Operator:

$x=5;
if($x == 5){
    echo 'Five';
}else{
    echo 'Others';
}
echo $x==5 ? 'five' : 'others'; // Tarnary Operator:


// isset & unset:
$x = 5;
$y = null;
unset ($y);

if(isset($y)){
    echo 'Variable found';
}else{
    echo 'Variable is not found';
}

// Null Coalescing Operator:
echo $y ?? "Variable is not set";

// function:

function alarm(){
    echo 'Good Morning';
}
alarm();

function alarm2($name){
    return 'Good Morning '.$name;
}
echo alarm('Bangladesh'); //uses of aurguments.

function sum($num1, int $num2){
    return $num1+$num2;
}
echo sum(1,'20b10b');



?>
</body>
</html>