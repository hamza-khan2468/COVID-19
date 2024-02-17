<?php
session_start();
include('includes/config.php');

if(isset($_POST['submit']))
  {
$contactno=$_POST['contactno'];
$username=$_POST['username'];
$password=md5($_POST['newpassword']);
$query=mysqli_query($con,"select ID from tbladmin where  AdminuserName='$username' and MobileNumber='$contactno' ");
        
    $ret=mysqli_num_rows($query);
    if($ret>0){
      $query1=mysqli_query($con,"update tbladmin set Password='$password'  where  AdminuserName='$username' && MobileNumber='$contactno' ");
       if($query1)
   {
echo "<script>alert('Password successfully changed');</script>";
echo "<script>window.location.href='login.php'</script>";

   }
     
    }
    else{
    
      echo "<script>alert('Invalid Details. Please try again.');</script>";
    }
  }
  ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Covid 19 Testing Management System | Admin Login</title>

    <!-- Custom fonts for this template-->
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
  <script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
</head>

<body class="bg-white">
<header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

<div class="container">
  <div class="row align-items-center">

    <div class="col-6 col-xl-2">
      <!-- <div class="mb-0 site-logo"><a href="index.php" class="mb-0"><img src="ui/images/logo.jpg" alt="not work" height="50px" width="100px"><span class="text-primary">.</span> </a></div> -->
    <img src="ui/images/logo.png" style="position: absolute;margin-top:-100px; margin-left:-50px;" height="200px" alt="">
    </div>

    <div class="col-12 col-md-10 d-none d-xl-block">
      <nav class="site-navigation position-relative text-right" role="navigation">

        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
          <li ><a href="index.php" class="nav-link">Home</a></li>
          <li ><a href="new-user-testing.php" class="nav-link">Covid-Test</a></li>
          <li><a href="about.php" class="nav-link">About</a></li>
          <li><a href="blog.php" class="nav-link">Blog</a></li>
          <li><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="active"><p><a href="login.php" class="btn btn-primary">Login</a></p></li>
        </ul>
      </nav>
    </div>


    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

  </div>
</div>

</header>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
 <h3 align="center" class="text-primary " style="margin-top:10%;color:#fff">Covid Testing Management System</h3>
                <div class="card o-hidden border-0 shadow-lg my-5">

                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
<form name="login" method="post" name="changepassword">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 text-primary">Password Recovery</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="username" 
                                                id="username" placeholder="Enter username" required="true">
                                        </div>
                                        <div class="form-group">
                                <input type="text" name="contactno" placeholder="Contact Number" autocomplete="off" class="form-control">
                                        </div>
                                    <div class="form-group">
                                      <input type="password" name="newpassword" placeholder="New Password" autocomplete="off" class="form-control">
                                        </div>

                                            <div class="form-group">
                               <input type="password" name="confirmpassword" placeholder="Confirm Password" autocomplete="off" class="form-control">
                                        </div>

                        <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Submit">
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="login.php" style="font-weight:bold">Signin</a>
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