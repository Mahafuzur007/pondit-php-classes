<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Calculator</title>
</head>

<body>
    <form action="./calc.php" method="POST">
        <input type="text" name="number1">
        <input type="text" name="number2">
        <select name="calculator">
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="multi">Multiply</option>
            <option value="div">Divide</option>
        </select>
        <button type="submit" name="submit">Calculate</button> 
    </form>
</body>

</html>