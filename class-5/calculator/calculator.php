<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>
<body>
  <?php 
    if($_SESSION["username"]) {
  ?>
    <?= "Welcome " . $_SESSION["username"] ?>
    <br/>
      <form action="logout.php">
        <button type="submit">
          Logout
        </button>  
      </form>
  <?php 
    }
  ?>
  <form action="" method="POST">
    <input type="number" name="num1" placeholder = "enter your number"><br><br>
    <input type="number" name="num2" placeholder = "enter your number"><br><br>
    <select name="operator"> 
      <option value="none">None</option>
      <option value="add">Add (+) </option>
      <option value="sub">Substract (-)</option>
      <option value="multi">Multiply (*)</option>
      <option value="divide">Divided(/)</option>
    </select>
    <br>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
  </form>
  <p>The answer is:</p>
  <?php


  if(isset(($_POST)["submit"])){
    $num1 =  $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];

      if ($operator == "none"){
        echo "ERROR";
      }
      if ($operator == "add"){
        echo ($num1+$num2);
      }
      if ($operator == "sub"){
        echo ($num1-$num2);
      }
      if ($operator == "multi"){
        echo ($num1*$num2);
      }
      if ($operator == "divide"){
        echo ($num1/$num2);
      }
    }


?>

</body>
</html>