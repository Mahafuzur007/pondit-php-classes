<?php
session_start();

$index = $_GET['index'];

$_SESSION['students'][$index]['id'] = $_POST['id'];
$_SESSION['students'][$index]['name'] = $_POST['name'];
$_SESSION['students'][$index]['class'] = $_POST['class'];
$_SESSION['students'][$index]['number'] = $_POST['number'];

$_SESSION['message'] = 'Updated Sucessfully!';

header('location: ./table.php');
