<?php

@include 'config.php';

if(isset($_POST['submit'])){
                                                                       
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:create_one.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style type="text/css">
    .logo{ width: 29%; }
    input{ border: 0px solid; }
    textarea:focus, input:focus{ outline: none; }
    a{ text-decoration: none;}
    @media screen and (max-width:10800px) { .top{ padding-top: 15%;}}
    @media screen and (max-width:1080px) { .top{ padding-top: 15%;} }
    @media screen and (max-width:960px) { .top{ padding-top: 15%;} }
    @media screen and (max-width:540px) { .top{ padding-top: 0px;}  body{ background-color: #fff;}}
</style>
<script>
    window.onload = function() { 
     document.getElementById("password-tab").style.display = "none"
    }
    
    function slide(){
        document.getElementById("password-tab").style.display = "block"
    }
    
    </script>
<body style="background-image:url('SignInBg.png'); background-repeat: no-repeat; background-size: cover;"> 
<div class="container"> 
    <div class="row justify-content-center top " >
        <div class="col-lg-5 col-md-5 col-sm-12 col-md-6 align-self-end border" style="background-color:#fff;"  >
            <div class="container py-5">
                <img src="Microsoft-logo.png" class="logo" alt="">
                <h4 class="py-3"> Create Account </h4>
                <form action="" method="post">

                <?php
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-msg">'.$error.'</span>';
                        };
                    };
                 ?>

                    <input type="name"  name="name" placeholder="Full Name" id="User_name" class="border-bottom w-100" required>
                    <input type="email" name="email" placeholder="Email, phone, or Skype" id="User_email" class="border-bottom w-100 pt-3" required>
                    <input type="password" name="password" placeholder="Password" id="email_password" class="border-bottom w-100 pt-3" required>
                    <input type="password" name="cpassword" placeholder="Confirm Password" id="email_password" class="border-bottom w-100 pt-3" required>
                    <select class="d-none" name="user_type">
                        <option value="user">user</option>
                    </select>
                    <!-- <p class="pt-3"> <a href="create_one.html"> Use phone number instead</a> </p> -->
                    <!-- <p class="pb-3"> <a href="#"> Get a new mail address</a></p> -->
                    <div class="row justify-content-end pt-5">
                        <a href="index.php"><button name="submit" class="align-self-end btn btn-primary col-2 me-4" href="create_one.html" id="To_password" > Next </button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row justify-content-center top" id="password-tab" >
        <div class="col-lg-5 col-md-5 col-sm-12 col-md-6 align-self-end border" style="background-color:#fff;"  >
            <div class="container py-5">
                <img src="Microsoft-logo.png" class="logo" alt="">
                <h4 class="py-3"> Enter Password </h4>
                <form action="">
                    <input type="password" name="email" placeholder="Password" id="email_placeholder" class="border-bottom w-100">
                    <p class="pt-3"> <a href="create_one.html"> Forgot password</a> </p>
                    <div class="row justify-content-end">
                        <button class="align-self-end btn btn-primary col-2 me-4" href="Signin.php" onclick="alert()"> Next </button>
                    </div>
                </form>
            </div>   
        </div>
    </div>

</div>
 <script> 
    function alert(){
        alert("You Have Successfuly registered!! You can now  Log-In. ");
       window.location.replace("localhost/Client_Portal-Login/Signin.php");
    }

</script>   

</body>
</html>