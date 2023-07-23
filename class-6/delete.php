<?php
session_start();

$index= $_GET['index'];
unset($_SESSION['students'][$index]);

$_SESSION['message'] = 'Deleted Sucessfully!';

header('location: ./table.php')

?>