<?php
session_start();

$index = $_GET['index'];

$student = $_SESSION['students'][$index];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Edit</title>
</head>

<body>
  <div class="container my-5">
    <form action="update.php?index=<?= $index ?>" method="POST">
      <div class="mb-3">
        <label class="form-label">Student Name</label>
        <input type="text" class="form-control" placeholder="Enter Student Name" name="name" value=<?= $student['name'] ?>>
      </div>

      <div class="mb-3">
        <label class="form-label">Enter ID</label>
        <input type="text" class="form-control" placeholder="Enter Student ID" name="id" value=<?= $student['id'] ?>>
      </div>

      <div class="mb-3">
        <label class="form-label">Class</label>
        <input type="text" class="form-control" placeholder="" name="class" value=<?= $student['class'] ?>>
      </div>

      <div class="mb-3">
        <label class="form-label">Phone Number</label>
        <input type="text" class="form-control" placeholder="" name="number" value=<?= $student['number'] ?>>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
</body>

</html>