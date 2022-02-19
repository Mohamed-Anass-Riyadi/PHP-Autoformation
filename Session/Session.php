<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" >
    <input type="text" name="username" placeholder="user">
    <input type="password" name="pass" placeholder="password">
    <input type="submit" name="btn" value="login">
</form>

    <?php

    $name = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    if(isset($_POST['btn'])){
        if(empty($name) || ($pass)){
            echo "<span style= color:red> CHAMP </span>";
        }else{
            echo $_SESSION['user'] = $name;

        }

    }

    ?>

</body>
</html>