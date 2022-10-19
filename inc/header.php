<?php
session_start();

// if(isset($_POST["submit"])){

    $email = $_SESSION['email'];
//     $password = $_POST['password'];
    $_SESSION['user-email'] = $email;

  // if(isset($_SESSION['email'])){
  //   header("location:home.php");
  // }

//     require_once 'dbh.inc.php';
//     require_once 'function.inc.php';

    // if( emptyInputSignup($email, $password) !== false) {
    //     header("location: ../index.php?error=emptyinput");
    //     exit();
    // }

    // function emptyInputSignup($ema il, $password){
    //     echo "logged In";
    // }
    
    // $sql = "SELECT * FROM user_form WHERE email = '$email'";
    // $result = $conn->query($sql);
    // // $row = mysqli_fetch_array($result);
    // if(mysqli_num_rows($result) > 0){
    //   $name = mysqli_fetch_all($result);

    // }

// }

// else {
//     header("location: login.php");
  
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canvas intelligence Client Portal </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<!-- <style>
  a{
    text-decoration: none;
  }
</style> -->


<body onload="onload()">

  <nav class="navbar navbar-expand-lg " style="background-color:white ;"> 
  <div class="container">
    <!-- <div class="logo  mx-2"> -->
      <!-- <a href="Document.html" class="navbar-brand">               
        <picture class="logo">
          <source srcset="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31" media="(min-width: 960px)">
          <source srcset="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31" media="(min-width: 540px)">
          <source srcset="Microsoft_logo-break.png" media="(min-width: 0)" class="img-fluid" >
          <img srcset="Microsoft_logo.png" class="logo" alt="Microsoft logo" />
        </picture>
      </a>
    </div>
    <div class="separator mx-1"></div> -->
    <div class="logo  mx-1 ">
      <a data-bi-area="topNav" data-bi-name="Nav_CanvasLogo" href="http://www.canvasintelligence.com/" class="logo" aria-label="Canvas logo">
        <img srcset="CanvasBlack.png" class="logo" alt="Canvas Logo" />
      </a>
    </div>
    <div class="separator mx-1"></div>
  
    <div >
    <a class="a" href="index.php"> 
      <h5 class="px-lg-2 pt-lg-2 pt-md-3 nav-menu">Client Portal</h5>
    </a>
    </div>
    
    
    <div class="d-block d-md-none underline my-1"></div>

      
      <div class="collapse navbar-collapse px-lg-5" id="menu">
        <ul class="navbar-nav">
            <li class="navbar-nav"> 
                <a href="home.php" class="nav-link a"> Home </a>
                <a href="CSAT.php" class="nav-link a"> CSAT</a>
                <a href="#" class="nav-link a">Old Reports</a>
                <a href="#" class="nav-link a">New Reports </a>
                <a href="#" class="nav-link a"> News</a>
            </li>
        </ul>
      </div>

      <?php
        if(isset($_SESSION["user-email"])){
          echo $email .'<img class="px-1" src="images.png" style="width:42px">'; 
        }

        else {
          echo '<a class="a" href="login.php"> Login <img class="px-2" src="images.png" style="width:42px"><a>' ;
        }

      ?>

      <div class="mx-auto d-block d-sm-none">
        <a class="a btn-left" href="Signin.html">
        <img class="px-2" src="images.png" alt="" style="width:50px ;">
        </a>
      </div>

      <button class="navbar-toggler mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#menu"> <span class="navbartoggler-icon"></span></button>
    </div>

</nav>
        <div class="bg-dark py-2">
          <marquee  behavior="scroll" direction="left"><a class="text-light a" href="https://www.canvasintelligence.com/webinars/"> Join our 60 minute webinar to familiarise yourself with the powerful functionality of Power BI and how it
             makes reporting easy. We will take you through the lifecycle of end user needs with a few examples. </a></marquee>
        </div>

    
