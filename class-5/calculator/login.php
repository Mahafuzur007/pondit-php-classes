
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
</head>
<body>
    <form action="auth.php" method="post">
        <input type="text" name="username" placeholder ="Enter User Name"/>
        <br> <br>
        <input type="password" name="password" placeholder ="password"/>
        <br> <br>
        <button type="submit">Login</button>
    </form>

    <?php
        session_start();
        if(isset($_SESSION["message"]))
        {
            echo $_SESSION["message"];
        }
    ?>
</body>
</html>