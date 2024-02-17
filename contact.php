<?php
include("includes/config.php");

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $query = "insert into contact(fname,lname,email,subject,message) values('$fname','$lname','$email','$subject','$message')";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo '<script>alert("Your request has been send.")</script>';
        echo "<script>window.location.href='contact.php'</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again.');</script>";
        echo "<script>window.location.href='contact.php'</script>";
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

    
    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

        <div class="col-6 col-xl-2">
            <!-- <div class="mb-0 site-logo"><a href="index.php" class="mb-0"><img src="ui/images/logo.jpg" alt="not work" height="50px" width="100px"><span class="text-primary">.</span> </a></div> -->
          <img src="ui/images/logo.png" style="position: absolute;margin-top:-100px; margin-left:-50px;" height="200px" alt="">
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block  p-2">
            <a href="index.php" class="nav-link list-unstyled">Home</a>
                <a href="new-user-testing.php" class="nav-link list-unstyled">Covid-Test</a>
                <a href="blog.php" class="nav-link list-unstyled">Blog</a>
                <a href="contact.php" class="nav-link list-unstyled">Contact</a>
                <a href="login.php" class="btn btn-primary text-white list-unstyled">Login</a>
              </ul>
            </nav>
          </div>



          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

        </div>
      </div>

    </header>




    <div class="hero-v1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center mx-auto">
            <span class="d-block subheading">Contact</span>
            <h1 class="heading mb-3">Get In Touch</h1>
            <p class="mb-5">Encourage users to contact for COVID vaccination testing inquiries. Provide contact details and a user-friendly contact form for assistance and queries.</p>
          </div>
          
        </div>
      </div>
    </div>


    <!-- MAIN -->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <form action="" method="POST">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="fname">First name</label>
                    <input type="text" id="fname" name="fname" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="lname">Last name</label>
                    <input type="text" id="lname" name="lname" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message"  class="form-control" cols="30" rows="10"></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <input type="submit" name="submit" class="btn btn-primary" value="Send Message">
                </div>
              </div>

            </form>
          </div>

          <div class="col-lg-5 ml-auto">
            <h3 class="mb-3 side-title">Quick info</h3>
            <div class="quick-contact">

              <div class="d-flex">
                <span class="icon-room"></span>
                <address>
                  karachi,Pakistan
                </address>
              </div>
              <div class="d-flex">
                <span class="icon-phone"></span>
                <a href="#">+92 312 2082355</a>
              </div>
              <div class="d-flex">
                <span class="icon-envelope"></span>
                <a href="#">Abubakar192005@gmail.com</a>
              </div>
              <div class="d-flex">
                <span class="icon-globe"></span>
                <a href="#">https://mywebsite.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="footer-heading mb-4">About</h2>
            <p>Our service is committed to offering accurate COVID-19 vaccination testing information. We prioritize vaccine safety and efficacy through thorough clinical trials and regulatory approvals, aiming to develop and distribute safe, effective vaccines, empowering us in the fight against COVID-19.</p>
            <div class="my-5">
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="new-user-testing.php">Covid-Test</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Helpful Link</h2>
                <ul class="list-unstyled">
                  <li><a href="https://pulsemedicalstaffing.com/helpful-links/">Helathcare Professional</a></li>
                  <li><a href="https://www.resilientlgus.ph/old-home">LGU Facilities</a></li>
                  <li><a href="https://www.albones.com/blog/covid-19-prevention-tips-to-protect-your-family">Protect Your Family</a></li>
                  <li><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">World Health</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Resources</h2>
                <ul class="list-unstyled">
                  <li><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/covid-19-vaccines/advice">WHO Website</a></li>
                  <li><a href="https://www.cdc.gov/coronavirus/2019-ncov/index.html">CDC Website</a></li>
                  <li><a href="https://www.sindhhealth.gov.pk/home/programs/COVID19">Gov Website</a></li>
                  <li><a href="https://doh.wa.gov/emergencies/covid-19/testing-covid-19">DOH Website</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div> <!-- .site-wrap -->

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