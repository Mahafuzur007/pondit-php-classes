<?php
session_start();

$username = 'admin';
$password = 123;
if(($username == $_POST['username']) && ($password == $_POST['password'])){
  $_SESSION['isAuthenticated'] = true;
  $_SESSION['username'] = $_POST['username'];
  echo "Authenticated";

  header('location: ./calculator.php');

}else{
  $_SESSION['isAuthenticated'] = false;
  $_SESSION["message"] = "Wrong Email or Password!";
  header('location: ./login.php');
}
?> 