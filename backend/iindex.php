<?php
session_start();

if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id={$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);

     $user = $result->fetch_assoc();

}



?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1> Home</h1>


    <?php if (isset($user)): ?>

    <p> Hello <?= htmlspecialchars($user["name"]) ?> </p>
    <p><a href="logout.php">Log out</a></p>
    <?php else: ?>

         <p><a href="login.php">Log in</a> or <a href="signup.html">Sign up</a></p>

    <?php endif; ?>

    </body>
    </html>