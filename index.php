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
        <div class="row align-items-center">
          <div class="col-lg-6 mr-auto text-center text-lg-left">
            <span class="d-block subheading">Covid-19 Awareness</span>
            <h1 class="heading mb-3">Stay Home. Stay Safe. </h1>
            <p class="mb-4">Stay home, prioritize safety during uncertain times. Protect yourself and others. Your actions matter in safeguarding health. Together, we can make a difference. 
               <p class="mb-4"><a href="https://www.chaffey.edu/coronavirus/docs/campus-update-072321-02.pdf" class="btn btn-primary">How to prevent</a></p>



          </div>
          <div class="col-lg-6">
            <figure class="illustration">
              <img src="ui/images/illustration.png" alt="Image" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-6"></div>
        </div>
      </div>
    </div>


    <!-- MAIN -->
    
<div class="site-section stats">
  <div class="container">
    <div class="row mb-3">
      <div class="col-lg-7 text-center mx-auto">
        <h2 class="section-heading">Coronavirus Statistics</h2>
        <p>COVID-19 Statistics: Cases, Deaths, Recoveries, Vaccinations, Variants, Testing, Hospitalizations, Positivity Rate, Mortality Rate, Transmission Rate.</p>
      </div>
    </div>
    <div class="row"> 
      <div class="col-lg-4">
        <div class="data">
          <span class="icon text-primary">
            <span class="flaticon-virus"></span>
          </span>
          <strong class="d-block number" id="activeCases">14,112,077</strong>
          <span class="label">Active Cases</span>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="data">
          <span class="icon text-primary">
            <span class="flaticon-virus"></span>
          </span>
          <strong class="d-block number" id="deaths">595,685</strong>
          <span class="label">Deaths</span>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="data">
          <span class="icon text-primary">
            <span class="flaticon-virus"></span>
          </span>
          <strong class="d-block number" id="recoveredCases">8,397,665</strong>
          <span class="label">Recovered Cases</span>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Simulating dynamic data update with last digit fixed
  setInterval(function() {
    document.getElementById("activeCases").innerText = numberWithCommas(Math.floor(Math.random() * 10000000) * 100);
    document.getElementById("deaths").innerText = numberWithCommas(Math.floor(Math.random() * 100000) * 10);
    document.getElementById("recoveredCases").innerText = numberWithCommas(Math.floor(Math.random() * 1000000) * 1000);
  }, 2000); // Update every 2 seconds

  // Function to add commas to numbers for better readability
  function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }
</script>



    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <figure class="img-play-vid">
              <img src="https://img.freepik.com/free-vector/cartoon-coronavirus-vaccine-illustration_23-2148849133.jpg" alt="Image" class="img-fluid">
              <div class="absolute-block d-flex">
                <span class="text test-info text-primary">Watch the Video</span>
                <a href="https://www.youtube.com/watch?v=U8r3oTVMtQ0" data-fancybox class="btn-play">
                  <span class="icon-play"></span>
                </a>
              </div>
            </figure>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="mb-4 section-heading">What is Coronavirus?</h2>
            <p>Coronavirus, like SARS-CoV-2, induces COVID-19. Symptoms: fever, cough, breath issues, taste/smell loss, pneumonia, organ failure. Spreads via droplets, surfaces. Prevent with vaccination, hygiene.</p>
            <ul class="list-check list-unstyled mb-5">
              <li>SARS-CoV-2: Emerged 2019, declared pandemic 2020.</li>
              <li>COVID-19 symptoms: fever, cough, shortness, fatigue, taste/smell loss.</li>
              <li>Spreads via droplets, surfaces. Prevent: vaccines, masks, distancing.</li>
            </ul>
            <p><a href="https://www.who.int/docs/default-source/coronaviruse/risk-comms-updates/update-28-covid-19-what-we-know.pdf" class="btn btn-primary">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container pb-5">
      <div class="row">
        <div class="col-lg-3">
          <div class="feature-v1 d-flex align-items-center">
            <div class="icon-wrap mr-3">
              <span class="flaticon-protection"></span>
            </div>
            <div>
              <h3>Protection</h3>
              <span class="d-block">Vaccination, masks, hygiene: vital COVID-19 shields.</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-v1 d-flex align-items-center">
            <div class="icon-wrap mr-3">
              <span class="flaticon-patient"></span>
            </div>
            <div>
              <h3>Prevention</h3>
              <span class="d-block">Prevent COVID-19: Vaccinate, Mask, Hygiene.</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-v1 d-flex align-items-center">
            <div class="icon-wrap mr-3">
              <span class="flaticon-hand-sanitizer"></span>
            </div>
            <div>
              <h3>Treatments</h3>
              <span class="d-block">COVID-19 Treatments: Medication, Oxygen, Supportive Care.</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-v1 d-flex align-items-center">
            <div class="icon-wrap mr-3">
              <span class="flaticon-virus"></span>
            </div>
            <div>
              <h3>Symptoms</h3>
              <span class="d-block">COVID-19 Symptoms: Fever, Cough, Shortness of Breath, Fatigue, Taste/Smell Loss.</span>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-primary-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">

            <div class="row">
              <div class="col-6 col-lg-6 mt-lg-5">
                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-stay-at-home"></span>
                  </div>
                  <div class="body">
                    <h3>Stay at home</h3>
                    <p>Stay home, limit contact, protect vulnerable, support healthcare, follow guidelines, prioritize safety, ensure well-being.</p>
                  </div>
                </div>

                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-patient"></span>
                  </div>
                  <div class="body">
                    <h3>Wear facemask</h3>
                    <p>Maintain distance, limit contact, prevent spread, prioritize safety, follow guidelines, ensure well-being.</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-6">
                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-social-distancing"></span>
                  </div>
                  <div class="body">
                    <h3>Keep social distancing</h3>
                    <p>Wear masks, cover face, prevent spread, prioritize safety, follow guidelines, ensure hygiene, protect yourself and others.</p>
                  </div>
                </div>

                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-hand-washing"></span>
                  </div>
                  <div class="body">
                    <h3>Wash your hands</h3>
                    <p>Wash hands, clean frequently, prevent germs, prioritize hygiene, follow guidelines, ensure safety, protect yourself and others.</p>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-heading mb-4">How to Prevent Coronavirus?</h2>
            <p>Coronavirus prevention involves vaccination, mask-wearing, hand hygiene, and social distancing. Vaccination builds immunity, while masks reduce respiratory droplet transmission. Handwashing and sanitizing mitigate surface spread. Social distancing minimizes close contact. These measures collectively help curb COVID-19 transmission and protect public health.</p>

            <ul class="list-check list-unstyled mb-5">
              <li>Vaccination: Protect yourself and others by getting vaccinated against COVID-19.</li>
              <li>Mask-Wearing: Wear masks in public areas to reduce the risk of respiratory droplet transmission.</li>
              <li>Hand Hygiene: Wash hands frequently with soap and water for at least 20 seconds or use hand sanitizer.</li>
            </ul>

            <p><a href="https://www.afro.who.int/sites/default/files/2020-04/Guidelines%20on%20%20Prevention%20of%20Infection%20in%20Markets.pdf" class="btn btn-primary">Read more about prevention</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">What you need to do</span>
            <h2 class="mb-4 section-heading">How To Protect Yourself</h2>
            <p>Get vaccinated, wear masks, practice hand hygiene. These measures help prevent COVID-19 transmission and safeguard public health.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 ">
            <div class="row mt-5 pt-5">
              <div class="col-lg-6 do ">
                <h3>You should do</h3>
                <ul class="list-unstyled check">
                  <li>Stay at home</li>
                  <li>Wear mask</li>
                  <li>Use Sanitizer</li>
                  <li>Disinfect your home</li>
                  <li>Wash your hands</li>
                  <li>Frequent self-isolation</li>
                </ul>
              </div>
              <div class="col-lg-6 dont ">
                <h3>You should avoid</h3>
                <ul class="list-unstyled cross">
                  <li>Avoid infected people</li>
                  <li>Avoid animals</li>
                  <li>Avoid handshaking</li>
                  <li>Aviod infected surfaces</li>
                  <li>Don't touch your face</li>
                  <li>Avoid droplets</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="ui/images/protect.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-primary-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4 section-heading">Symptoms of Coronavirus</h2>
            <p>Coronavirus symptoms include fever, cough, shortness of breath, fatigue, loss of taste or smell, body aches, and in severe cases, pneumonia.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="ui/images/symptom_high-fever.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>High Fever</h3>
                <p> High fever can occur due to COVID-19, often accompanied by other symptoms such as cough, fatigue, and body aches.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="ui/images/symptom_cough.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Cough</h3>
                <p> Cough is a common symptom of COVID-19, often presenting with other signs like fever, shortness of breath, and fatigue.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="ui/images/symptom_sore-troath.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Sore Troath</h3>
                <p> Sore throat can also be a symptom of COVID-19, along with other common signs like fever, cough, and fatigue.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="ui/images/symptom_headache.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Headache</h3>
                <p>Headache is another possible symptom of COVID-19, often accompanying fever, cough, fatigue, and other respiratory symptoms.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-md-center">
          <div class="col-lg-10">
            <div class="note row">

              <div class="col-lg-8 mb-4 mb-lg-0"><strong>Stay at home and call your doctor:</strong> Stay home, call your doctor, or use helpline if experiencing COVID-19 symptoms for guidance and potential testing or treatment.</div>
              <div class="col-lg-4 text-lg-right">
                <a href="contact.php" class="btn btn-primary"><span class="icon-phone mr-2 mt-3"></span>Help line</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4 section-heading">Covid Vacciation Testing Hosiptals</h2>
            <p>Discover a range of healthcare facilities offering Covid vaccination, testing, and hospital services. Explore through images below to find the services you need.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">16 October 1958</span>
                <img src="ui/images/LNMC.jpeg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="#">Liaquat National Hospital.</a></h3>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">20 May 1975</span>
                <img src="ui/images/ZIAUDDIN.jpeg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="#">Ziauddin hospital</a></h3>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">28 February 2007</span>
                <img src="ui/images/INDUS.jpeg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="#">Indus Hospital Karachi.</a></h3>
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