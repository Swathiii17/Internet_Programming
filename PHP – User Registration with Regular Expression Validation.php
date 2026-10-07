<!DOCTYPE html>
<html>

<head>
    <title>PHP Registration</title>

    <style>
        body {
            font-family: Arial;
        }

        input {
            padding: 8px;
            margin: 5px;
        }

        .box {
            width: 400px;
            margin: 40px auto;
        }
    </style>
</head>

<body>

<div class="box">

<h2>User Registration</h2>

<form method="post">

    Username:
    <input type="text" name="username">
    <br>

    Email:
    <input type="text" name="email">
    <br>

    Mobile:
    <input type="text" name="mobile">
    <br>

    <input type="submit" name="submit" value="Register">

</form>

<?php

if(isset($_POST["submit"])) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];

    if(!preg_match("/^[A-Za-z0-9_]{3,20}$/", $username)) {

        echo "Invalid Username";

    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        echo "Invalid Email";

    } elseif(!preg_match("/^[0-9]{10}$/", $mobile)) {

        echo "Invalid Mobile Number";

    } else {

        echo "<h3>Registration Successful</h3>";
    }
}

?>

</div>

</body>
</html>
