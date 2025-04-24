<?php
    if(isset($_SESSION['success'])){
        echo $_SESSION['succsess'];
        unset($_SESSION['success']);
    } 
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        echo($_SESSION['error']);
    }
?>