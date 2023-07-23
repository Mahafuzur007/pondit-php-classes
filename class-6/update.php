<?php
session_start();

$id = $_POST['id'];
$name = $_POST['name'];
$class = $_POST['class'];
$number = $_POST['number'];
$index = $_POST['index'];

foreach ($_SESSION['students'] as $key => $value)
{
    if ($key == $index)
    {
        $_SESSION['students'][$key]['id'] = $id;
        $_SESSION['students'][$key]['name'] = $name;
        $_SESSION['students'][$key]['class'] = $class;
        $_SESSION['students'][$key]['number'] = $number;


        header('location: ./table.php');
    }
}

$_SESSION['message'] = 'Updated Sucessfully!';


?>