<?php
session_start();

$index = $_GET['index'];
$student = $_SESSION['students'][$index];

// print_r ($student);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Show Data</title>
</head>
<body>
<div class="container my-5">
        <a href="/pondit-php/class-6/table.php" class="btn btn-primary">Go Back</a>
        <table class = 'table my-5 mx-5'>
            <th scope="col">Id</th>
            <th scope="col">Student Name</th>
            <th scope="col">Class</th>
            <th scope="col">Phone Number</th>
            <tbody>
                    <td> <?= $student['id']?></td>
                    <td> <?= $student['name']?></td>
                    <td> <?= $student['class']?></td>
                    <td> <?= $student['number']?></td>
        </tbody>
        </table>
</body>
