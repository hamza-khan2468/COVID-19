<?php
session_start();
include('includes/config.php');

if(isset($_POST['login']))
  {
    $uname=$_POST['username'];
    $Password=md5($_POST['inputpwd']);
    $query=mysqli_query($con,"select ID from tbladmin where  AdminuserName='$uname' && Password='$Password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['aid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    echo "<script>alert('Invalid Details.');</script>";          
    }
  }
  ?>




<!doctype html>
<html lang="en">
<head>
  <title>Covid &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    

  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="ui/fonts/icomoon/style.css">

  <link rel="stylesheet" href="ui/css/bootstrap.min.css">
  <link rel="stylesheet" href="ui/css/jquery-ui.css">
  <link rel="stylesheet" href="ui/css/owl.carousel.min.css">
  <link rel="stylesheet" href="ui/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="ui/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="ui/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="ui/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="ui/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="ui/fonts/flaticon-covid/font/flaticon.css">

  <link rel="stylesheet" href="ui/css/aos.css">

  <link rel="stylesheet" href="ui/css/style.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    


    <div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9 mt-5">
<h3 align="center" class="text-primary" style="margin-top:2%;color:#fff">Covid Testing Management System</h3>
        <div class="card o-hidden border-0 shadow-lg my-5">

            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
<form name="login" method="post">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4 text-primary">Welcome Back!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" 
                                        id="username" placeholder="Enter username" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="inputpwd" 
                                        id="inputpwd" placeholder="Password">
                                </div>
                <input type="submit" name="login" class="btn btn-primary btn-user btn-block" value="login">
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="password-recovery.php" style="font-weight:bold">Forgot Password?</a>

                            </div>

                                 <div class="text-center">
                                <a class="small" href="index.php" style="font-weight:bold;"><i class="fa fa-home" aria-hidden="true"></i> Home Page</a>
                            </div>
                
                        </div>
                    </div>
                </div>

</form>

            </div>
        </div>

    </div>

</div>

</div>







    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
     <!-- .site-wrap -->

  <script src="ui/js/jquery-3.3.1.min.js"></script>
  <script src="ui/js/jquery-ui.js"></script>
  <script src="ui/js/popper.min.js"></script>
  <script src="ui/js/bootstrap.min.js"></script>
  <script src="ui/js/owl.carousel.min.js"></script>
  <script src="ui/js/jquery.countdown.min.js"></script>
  <script src="ui/js/jquery.easing.1.3.js"></script>
  <script src="ui/js/aos.js"></script>
  <script src="ui/js/jquery.fancybox.min.js"></script>
  <script src="ui/js/jquery.sticky.js"></script>
  <script src="ui/js/isotope.pkgd.min.js"></script>


  <script src="ui/js/main.js"></script>


</body>
</html>