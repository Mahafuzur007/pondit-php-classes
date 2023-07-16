<?php

$a = 20; //Global Variable
$b = 40;
function printValue(){
    global $a , $b; //Use global keyword to access variable outside the function.
    echo "The global variable is $a and $b <br>";
    $c = 30; //Local Variable
    echo "The local variable is $c";
}
printValue();
echo'<br>';
//$GLOBALS variable (super variable)
echo ($GLOBALS ['a']);
echo'<br>';
echo ($GLOBALS ['b']);





?>