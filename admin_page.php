<?php
@include 'inc/header.php';
@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['Name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
//    $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:home.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">


</head>
<body onload="security()">

  <script>
    function security() {
      alert("We have implemented Role-Based Access Control (RBAC) for data security; to authenticate your access, please click the PowerBI Sign-In Button.")
    }
  </script>


  <!-- <div class="row mt-1 shadow-lg" id="Access Control">
    <div class="col-lg-4 text-center d-none d-md-block">
    <div class="alignment px-3 shadow" style="padding-top:25%;;">
      <h1 >Access Control</h1> 
      <p> Access control is a critical component of security that determines who has access to specific data, apps, and resources and under what conditions. Secure your reports and Workspaces by getting to know who has accessed them.  </p>  
    </div> 
    
    </div>
    <div class="col-lg-8">
      <div class="d-block d-md-none text-center"><h1 >Access Control</h1> </div> 
      <iframe class="powerBI-report" title="Mix Trips Positions Shifts Final_PM"src="https://app.powerbi.com/reportEmbed?reportId=7e2ce7a9-091d-485a-9da3-f373245d4ec2&autoAuth=true&ctid=012ad0f2-8372-4425-82e4-c5e25967c3c9" frameborder="0" allowFullScreen="true"></iframe>
    </div>
  </div>

  <div class="row my-3 shadow-lg" id="Metric Usage">
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="d-block d-md-none text-center"><h1 >Metric Usage</h1> </div> 
      <iframe class="powerBI-report" title="Mix Trips Positions Shifts Final_PM"src="https://app.powerbi.com/reportEmbed?reportId=7e2ce7a9-091d-485a-9da3-f373245d4ec2&autoAuth=true&ctid=012ad0f2-8372-4425-82e4-c5e25967c3c9" frameborder="0" allowFullScreen="true"></iframe>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 shadow px-3 text-center d-none d-md-block" style="padding-top:10%;">
      <h1 >Metric Usage</h1> 
      <p> Access control is a critical component of security that determines who has access to specific data, apps, and resources and under what conditions. Secure your reports and Workspaces by getting to know who has accessed them.  </p>  
    </div>
  </div>

  <div class="row mt-1 shadow-lg" id="Fresh Desk">
    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
    <div class="alignment px-3 shadow d-none d-md-block" style="padding-top:25%;;">
      <h1 >Fresh Desk</h1> 
      <p> Access control is a critical component of security that determines who has access to specific data, apps, and resources and under what conditions. Secure your reports and Workspaces by getting to know who has accessed them.  </p>  
    </div> 
    
    </div>
    <div class="col-lg-8">
      <div class="d-block d-md-none text-center"><h1 >Fresh Desk</h1> </div> 
      <iframe class="powerBI-report" title="Mix Trips Positions Shifts Final_PM"src="https://app.powerbi.com/reportEmbed?reportId=7e2ce7a9-091d-485a-9da3-f373245d4ec2&autoAuth=true&ctid=012ad0f2-8372-4425-82e4-c5e25967c3c9" frameborder="0" allowFullScreen="true"></iframe>
    </div>
  </div>

  <div class="row mt-lg-5">
    <div class="col-lg-8 text-center">
      <div class="d-block d-md-none text-center"><h1 > Activity With Canvas</h1> </div> 
      <iframe class="powerBI-report" title="Mix Trips Positions Shifts Final_PM"src="https://app.powerbi.com/reportEmbed?reportId=7e2ce7a9-091d-485a-9da3-f373245d4ec2&autoAuth=true&ctid=012ad0f2-8372-4425-82e4-c5e25967c3c9" frameborder="0" allowFullScreen="true"></iframe>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 alignment px-3 shadow d-none d-md-block" style="padding-top:25%;;">
      <h1>Activity With Canvas</h1>
    </div>
  </div> -->
<div class="bg-dark text-center text-light">
  <h3 class="py-3">Canvas Projects Insights</h3>
</div>
  <div class="row shadow py-lg-2">
    <div class="col-6 shadow-lg">
      <h4 class="text-center py-1"> Access Control</h4>
      <iframe class="powerBI-report" title="Mix Trips Positions Shifts Final_PM"src="https://app.powerbi.com/reportEmbed?reportId=7e2ce7a9-091d-485a-9da3-f373245d4ec2&autoAuth=true&ctid=012ad0f2-8372-4425-82e4-c5e25967c3c9" frameborder="0" allowFullScreen="true"></iframe>
    </div>

    <div class="col-6 shadow-lg">
      <h4 class="text-center py-1"> Metric Usage</h4>
      <iframe class="powerBI-report" title="Mix Trips Positions Shifts Final_PM"src="https://app.powerbi.com/reportEmbed?reportId=7e2ce7a9-091d-485a-9da3-f373245d4ec2&autoAuth=true&ctid=012ad0f2-8372-4425-82e4-c5e25967c3c9" frameborder="0" allowFullScreen="true"></iframe>
    </div>
  </div>

  <div class="row shadow h-50  py-lg-2">
    <div class="col-6 shadow-lg">
      <h4 class="text-center py-1"> Fresh Desk</h4>
      <iframe class="powerBI-report" title="Mix Trips Positions Shifts Final_PM"src="https://app.powerbi.com/reportEmbed?reportId=7e2ce7a9-091d-485a-9da3-f373245d4ec2&autoAuth=true&ctid=012ad0f2-8372-4425-82e4-c5e25967c3c9" frameborder="0" allowFullScreen="true"></iframe>
    </div>

    <div class="col-6 shadow-lg">
      <h4 class="text-center py-1"> Canvas Communication</h4>
      <iframe class="powerBI-report" title="Mix Trips Positions Shifts Final_PM"src="https://app.powerbi.com/reportEmbed?reportId=7e2ce7a9-091d-485a-9da3-f373245d4ec2&autoAuth=true&ctid=012ad0f2-8372-4425-82e4-c5e25967c3c9" frameborder="0" allowFullScreen="true"></iframe>
    </div>
  </div>
</body>
</html>