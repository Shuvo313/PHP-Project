<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "phptutorial";

    //Create Connection
    // $conn = mysqli_connect($servername, $username, $password, $dbName);

    //Check Connection
    /* if($conn->connect_error){
        die("Connection failed: " .$conn->connect_error);
    } */
    $conn = @mysqli_connect(
    $servername, 
    $username, 
    $password, 
    $dbName
); 

   if ($conn->connect_error){
    die("Connection failed" .$conn->connect_error);
   }
   /* else{
    echo "Failed to connect to database, error: ".mysqli_connect_error();
   } */

   /* echo "<pre>"; 
   print_r($conn);
   exit; */
    // echo "Connect Successfully";

?> 