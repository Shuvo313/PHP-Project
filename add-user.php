<?php
    include("config/database.php");

    /* $_SESSION ['name'] = "Welcome!";
    echo $_SESSION['name']; */
    //Form submission

    if(isset($_POST['submit'])){
        extract($_POST);
        
        $date = date("Y-m-d H:i:s");
        $pass = md5($password);
        $sql = "insert into users(username, password, created_at) values
        ('$username','$pass','$date')";

        $result = $conn->query($sql);
        if($result){
            echo "User has been created";
        }
        else{
            echo "Something went wrong.please try again";
        }
        // exit;
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
        <h2>Registration Form</h2>
    <form action="add-user.php" method="post">
        <div class="container">
            <label for="uname">Username<br></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="pwd">Password<br></label>
            <input type="password" placeholder="Enter Password" name="password" required>

           <button type="submit" name="submit">Signup</button>
        </div>
    </form>

    <div class="container">
        <a href="users.php" class="footerbtn">All Users</a>
    </div>
    </section>
    
</body>
</html>