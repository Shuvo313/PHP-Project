<?php
    include("config/database.php");

    #GET Users Data
    if(isset($_GET['id'])){
        $sql = "select * from users where id = ". $_GET['id'];
        $result = $conn->query($sql); 
        $user = mysqli_fetch_assoc($result);
}
    else{
        echo "<h1>Invalid request</h1>";
        exit;
    }

    #Update User Data

    if(isset($_POST['submit'])){
        extract($_POST);
        
        $sql = "UPDATE users SET username = '$username',password = '$password' where id = ".$_GET['id'];

        $result = $conn->query($sql);
        if($result){
            echo "User data has been updated";
        }
        else{
            echo "Something went wrong.please try again";
        }
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
        <h2>Edit User</h2>
    <form action="edit-user.php?id=<?php echo $user['id']?>" method="post">
        <div class="container">
            <label for="uname">Username</label>
            <input type="text" placeholder="Enter Username" name="username" required value="<?php echo $user['username'] ?>">

            <label for="pwd">Password</label>
            <input type="password" placeholder="Enter Password" name="password" required value="<?php echo $user['password'] ?>">

           <button type="submit" name="submit">Update</button>
        </div>
    </form>

    <div class="container">
        <a href="users.php" class="footerbtn">All Users</a>
    </div>
    </section>
    
</body>
</html>