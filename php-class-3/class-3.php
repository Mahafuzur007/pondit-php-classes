<?php
// Single Quote & Double Quote
$firstName = "Mr";
$lastName = "X";

echo '$firstname.$lastname';
echo "$firstName $lastName";

// Here Doc
$age = 65;
echo <<< PROJECT
Lorem Ipsum is simply "dummy text of the printing" and typesetting industry. Lorem Ipsum has been $age standard dummy.
PROJECT;

// Now Doc
$age = 50;
echo <<< 'PROJECT'
Lorem Ipsum is simply "dummy text of the printing" and typesetting industry. Lorem Ipsum has been <b>$age</b> standard dummy.
PROJECT;

// Difference Between echo & print

echo "Tiger";
echo 'Lion';
echo ('Panda');
echo "Tiger","Lion";
echo "Tiger"." Lion";
echo "Tiger <b>Lion</b>";
echo 2354;
echo 23.54;

// print "Tiger","Lion"; (wrong syntx)
// 1. Print Statement can'nt parse two statement
// 2. It is solwer than echo.
print "Tiger"." Lion";

// For Loop
for($a = 1;$a <= 10; $a++){
    echo $a . ":". " Thank You<br>";
}

for($a = 1;$a <= 10; $a = $a+2){
    echo $a . ":". " Thank You<br>";
}

for($a = 10;$a >= 1; $a--){
    echo $a . ":". " Thank You<br>";
}

// Array:

// Index Array
$colors = ['red','blue','yellow','green','black'];
echo $colors[0]."<br>";
echo $colors[1]."<br>";
echo $colors[2]."<br>";
echo $colors[3]."<br>";
echo $colors[4];

$colors = ['red','blue','23','green','0.237'];
echo $colors[0]."<br>";
echo $colors[1]."<br>";
echo $colors[2]."<br>";
echo $colors[3]."<br>";
echo $colors[4];
print_r($colors);

echo "<pre>";
print_r($colors);
echo "</pre>";

for($i = 0; $i <= 4; $i++){
    echo $colors[$i]."<br>";
}

// Associative Arrays
$age = [
    "a" => 25,
    "b" => 38,
    "c" => 40
];
echo $age ["b"];

$colors = ['red','blue','yellow','green','black'];
$age = [
    "a" => 25,
    "b" => 38,
    "c" => 40
];
foreach($age as $value){
    echo $value . "<br>";
}

foreach($age as $key => $value){
    echo "$key = $value <br>";
}

?>