<?php
include 'inc/header.php';
if(isset($_POST["submit"])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $conn = mysqli_connect('localhost', 'root', '', 'user_db');

    // require_once '../config.php';
    require_once 'inc/function.inc.php';

    $sql = "SELECT * FROM user_form WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);
  
        if($row['user'] == 'admin'){
  
        //    $_SESSION['admin_name'] = $row['name'];
           header('location:admin_page.php');
  
        }elseif($row['user'] == 'user'){
        //    $name = mysqli_real_escape_string($conn, $_POST['Name']);
            // $_SESSION['username'] = $name;
            $_SESSION['email'] = $email;
           header('location:home.php');
  
        }
    }

    else {
        header("location:login.php");

    }
    // if( emptyInputSignup($email, $password) !== false) {
    //     header("location: ../index.php?error=emptyinput");
    //     exit();
    // }

    // function emptyInputSignup($email, $password){
    //     echo "logged In";
    // }
}
 
else {
    header("location: ../index.php");
}