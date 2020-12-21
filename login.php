<?php session_start(); ?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<h1>Project 4 Login</h1>
<body>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="validate_login">
        <div class="container">
            <label for="email">Email</label>
            <div style="text-align: center"><input type="text" name="email" id="email"></div><br>

            <label for="password">Password</label>
            <div style="text-align: center"><input type="password" name="password" id="password"></div><br>
        </div>

        <br><br>
        <h1>Go To:</h1>
        <div style="text-align: center"><input class="btn btn-success" type="submit" value="Submit"></div>
        <br><br>
        <div style="text-align: center"><a href="registration.php">Register</a></div>
        <br>
    </form>

</body>
</html>
