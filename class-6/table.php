<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<?php
    session_start();

    $students = $_SESSION["students"];

    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset ($_SESSION['message']);
    }  
?>
  
  
  <div class="container my-5">
        <a href="/pondit-php/class-6/index.php" class="btn btn-primary">Add New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#SL</th>
      <th scope="col">Id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Class</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
        <tbody>

        <?php
                $sl = 0;
                foreach($students as $key => $student){?>
                <tr>
                    <td> <?= ++$sl ?></td>
                    <td> <?= $student['id']?></td>
                    <td> <?= $student['name']?></td>
                    <td> <?= $student['class']?></td>
                    <td> <?= $student['number']?></td>
                    <td>
                        <a href="./delete.php?index=<?=$key?>" class="btn btn-primary">Delete</a>
                        <a href="./show.php?index=<?=$key?>" class="btn btn-primary">Show</a>
                        <a href="./edit.php?index=<?=$key?>" class="btn btn-primary">Edit</a>
                    </td>
                </tr> 
                <?php } ?>
        </tbody>
</table>
    </div>
</body>
</html>