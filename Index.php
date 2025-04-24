<?php
include("config/database.php");

if(isset($_POST['submit'])){
    extract($_POST);

    echo $sql = "SELECT from users where username = '$username' AND password = '$password'";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="Stylesheet">
    <title>PHP Project</title>
</head>
<body>
    <section class="section">
        <h2>Login Form</h2>
    <form action="add-user.php" method="post">
        <div class="conatainer">
            <label for="uname">Username<br></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="pwd">Password<br></label>
            <input type="password" placeholder="Enter Password" name="password" required>

           <button type="submit" name="submit">Login</button>
        </div>
    </form>

    </body>
</html>