<?php

@include 'config.php';

// session_start();

// if(isset($_POST['submit'])){


//    $email = mysqli_real_escape_string($conn, $_POST['email']);
//    $pass = md5($_POST['password']);
// //    $cpass = md5($_POST['cpassword']);
// //    $user_type = $_POST['user'];

//    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
//    $result = mysqli_query($conn, $select);


//    if(mysqli_num_rows($result) > 0){

//       $row = mysqli_fetch_array($result);

//       if($row['user'] == 'admin'){

//          $_SESSION['admin_name'] = $row['name'];
//          header('location:admin_page.php');

//       }elseif($row['user'] == 'user'){
//          $name = mysqli_real_escape_string($conn, $_POST['Name']);
//          header('location:/home.php');

//       }
     
//    }else{
//       $error[] = 'incorrect email or password!';
//    }

// };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style type="text/css">
    .logo{ width: 29%; }
    input{ border: 0px solid; }
    textarea:focus, input:focus{ outline: none; }
    a{ text-decoration: none;}
    @media screen and (max-width:10800px) { .top{ padding-top: 12%;}}
    @media screen and (max-width:1080px) { .top{ padding-top: 15%;} }
    @media screen and (max-width:960px) { .top{ padding-top: 15%;}}
    @media screen and (max-width:540px) { .top{ padding-top: 0px;}  body{ background-color: #fff;}}

</style>
<body class="Login-bg overlay" > 
    <div class="container"> 
        <div class="row justify-content-center top " >
            <div class="col-lg-5 col-md-5 col-sm-12 col-md-6 align-self-end border" style="background-color:#fff;"  >
                <div class="container py-5">
                    <img src="CanvasBlack.png" class="logo" alt="">
                    <h4 class="pt-3"> Sign in</h4>
                    <form action="sign.inc.php" method="POST">
                        <input type="email" name="email" placeholder="email" id="email_placeholder" class="border-bottom w-75 py-2">
                        <input type="password" name="password" placeholder="password" id="email_placeholder" class="border-bottom w-75 py-2"> 
                        <p class="pt-3"> No account? <a href="create_one.php"> Create one!</a> </p>
                        <p class="p-3"> <a href="#"> Can't access your account?</a></p>
                        <div class="row justify-content-end">
                            <button name="submit" class="align-self-end btn btn-primary col-2 me-4" > Next </button>
                        </div>
                    </form>
                </div>   
            </div>
        </div>

        <div class="row justify-content-center py-3">
            <div class="col-lg-5 col-md-5 col-sm-12 self-align-start" style="background-color:#fff ;">
                <div class="row self-align-start">
                    <div class="col-4">
                        <img src="Key-Symbol.png" width="30px" alt="">
                    </div>
                    <div class="col-8">
                        <p class="pt-3"> Sign in Options</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>