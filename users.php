<?php
    include("config/database.php");

    #Delete User

    if(isset($_GET['id'])){
        extract($_GET);
        $sql = "DELETE FROM users where id = ". $id;
        $result = $conn->query($sql);
        if($result)
            echo "User has been deleted";
        
        else
            echo "Something went wrong.please try again!";
        
    }
    //Get all users
    $sql = "select * from users";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet"/>
    <title>PHP Project</title>
</head>
<body>
    <section class="section">
        <h2>All Users</h2>

        <table id="users">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
            <?php
                if($result->num_rows >0){
                while($row = mysqli_fetch_assoc($result)){

            ?>
                <tr>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo date("d-m-Y H:i A", strtotime($row['created_at']))?></td>
                    
                    <td>
                        <a href="edit-user.php?id=<?php echo $row['id']?>" class="button edit">Edit</a>
                        <a href="users.php?id=<?php echo $row['id']?>" class="button delete">Delete</a>
                    </td>
                </tr>
                <?php }
            }  else{
                echo"<tr><td colspan='3'>No record found!</td></tr>";
            }
            ?>

            </tbody>
        </table>

        <div class="container">
            <a href="add-user.php" class="footerbtn">Add User</a>
        </div>

    </section>
    
</body>
</html>