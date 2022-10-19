<?php

    function loginUser($conn, $email, $password){
       $user = users($conn, $email, $password); 
    }

function users($conn, $email, $password){
    $sql = "SELECT * FROM user_form WHERE email = '$email'";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:../index.php");
        exit();
    }
}