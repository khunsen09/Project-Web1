<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Hmo</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="./Images/icon.PNG" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="service-details-page">

  <header id="header" class="header sticky-top" style="background-color: rgb(27, 64, 128);">
    <div class="branding d-flex align-items-center">
      
      <div class="container-fluid position-relative d-flex align-items-center justify-content-end" style="margin-left: 10px;">
        <a href="index.php" class="logo d-flex align-items-center me-auto">
          <img src="Images/HrmakeLong new.png" alt="logo" class="img-fluid" style="max-height: 95px; height: auto;">
        </a>
  
        <nav id="navmenu" class="navmenu" style="margin: 0 auto;">
          <ul>
            <li><a href="index.php"  style="font-size: 15px;">Home</a></li>
            <li><a href="about.php" style="font-size: 15px;">About</a></li>
            <li><a href="services.php" class="active" style="font-size: 15px;">Services</a></li>
            <li><a href="departments.php" style="font-size: 15px;">Departments</a></li>
            <li><a href="doctor.php" style="font-size: 15px;">Doctors</a></li>
            <li class="dropdown"><a href="#"><span style="font-size: 15px;">Rates & Packages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="rates.php" style="font-size: 15px;">Rates</a></li>
                <li><a href="packages.php" style="font-size: 15px;" >Packages</a></li>
              </ul>
            </li>
            <li><a href="faq.php" style="font-size: 15px;">FAQ'S</a></li>
            <li><a href="contact.php"  style="font-size: 15px;">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
  
        <!-- Search Form -->
        <form class="d-flex ms-3" action="doctor.php" method="get" role="search">
          <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
  
      </div>
    </div>
  </header>

  <style>

CSS.g-6,
.gx-6 {
  --bs-gutter-x: 4.5rem;
}
.g-6,
.gy-6 {
  --bs-gutter-y: 4.5rem;
}
@media (min-width: 576px) {
  .g-sm-6,
  .gx-sm-6 {
    --bs-gutter-x: 4.5rem;
  }
  .g-sm-6,
  .gy-sm-6 {
    --bs-gutter-y: 4.5rem;
  }
}
@media (min-width: 768px) {
  .g-md-6,
  .gx-md-6 {
    --bs-gutter-x: 4.5rem;
  }
  .g-md-6,
  .gy-md-6 {
    --bs-gutter-y: 4.5rem;
  }
}
@media (min-width: 992px) {
  .g-lg-6,
  .gx-lg-6 {
    --bs-gutter-x: 4.5rem;
  }
  .g-lg-6,
  .gy-lg-6 {
    --bs-gutter-y: 4.5rem;
  }
}
@media (min-width: 1200px) {
  .g-xl-6,
  .gx-xl-6 {
    --bs-gutter-x: 4.5rem;
  }
  .g-xl-6,
  .gy-xl-6 {
    --bs-gutter-y: 4.5rem;
  }
}
@media (min-width: 1400px) {
  .g-xxl-6,
  .gx-xxl-6 {
    --bs-gutter-x: 4.5rem;
  }
  .g-xxl-6,
  .gy-xxl-6 {
    --bs-gutter-y: 4.5rem;
  }
}
.mb-6 {
  margin-bottom: 4.5rem !important;
}
.py-6 {
  padding-top: 4.5rem !important;
  padding-bottom: 4.5rem !important;
}
@media (min-width: 576px) {
  .mb-sm-6 {
    margin-bottom: 4.5rem !important;
  }
  .py-sm-6 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
}
@media (min-width: 768px) {
  .mb-md-6 {
    margin-bottom: 4.5rem !important;
  }
  .py-md-6 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
}
@media (min-width: 992px) {
  .mb-lg-6 {
    margin-bottom: 4.5rem !important;
  }
  .py-lg-6 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
}
@media (min-width: 1200px) {
  .mb-xl-6 {
    margin-bottom: 4.5rem !important;
  }
  .py-xl-6 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
}
@media (min-width: 1400px) {
  .mb-xxl-6 {
    margin-bottom: 4.5rem !important;
  }
  .py-xxl-6 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
}
.section-background {
    background-color: #343a40; /* Dark background color */
    background-image: url('Images/sample-design.png'); /* Optional background image */
    background-size: cover; /* Ensures the image covers the whole section */
    background-position: center; /* Centers the background image */
    padding: 50px 0; /* Adds vertical spacing */
    color: #fff; /* Ensures text is visible on dark background */
}

.section-title h2 {
    margin-bottom: 20px; /* Adds spacing below the title */
}

.video-container video {
    max-width: 80%; /* Ensures the video is responsive */
    max-height: 500px; /* Restricts video height */
    border-radius: 10px; /* Optional: adds rounded corners to the video */
}


  </style>

  <main class="main">

     <!--Introduction-->
     
    


     <div class="section-background">
    <div class="container section-title mt-5" data-aos="fade-up">
        <h2 class="text-center text-light">Health Maintenance Organization</h2>
        <!-- <p class="title-paragraph text-center text-light">A 110 bed modern hospital in Metropolis road, Tagbak, Jaro, Iloilo City.</p> -->
    </div><!-- End Section Title -->

    <div class="col-md-12 py-3 d-flex justify-content-center align-items-center">
        <!-- Right Column with Centered Video -->
        <video autoplay muted loop controls class="img-fluid">
            <source src="https://metroiloilohospital.com/vid/hmo.mp4#t=00:03" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>


 
    <!-- Client 1 - HCF Bootstrap 5 Component -->
    <section class="py-xl-6">
      <div class="container overflow-hidden">
        <div class="row gy-5 gy-md-6">
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Mediafix Healthcare - Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div>   
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Health Maintenance Inc - Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div>   
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Generali - Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div>   
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Valucare -  Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div>   
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Eastwest Healthcare - Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div>   
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Philcare -Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div>   
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Insular Healthcare - Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div>   
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Avega Healthcare Solutions - Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div>   
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Paciifc Cross Philippines - Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div>   
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Intellicare - Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div>   
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Allianz PNB Life Insurance - Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div>   
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Asianlife and General Assurance Corporation -Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div>   
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Carehealth Plus - Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div>   
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Maxicare - Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div>   
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Cocolife Healthcare - Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div> 
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/hppi -Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div> 
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Wellcare Health Plans - Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div> 
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/Kaiser Permanente - Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div> 
            <div class="col-6 col-md-3 align-self-center text-center">
                <img src="Images/IMS Wellth Care Inc - Accredited HMO.jpg" alt="Description of the image" width="155" height="85" class="text-dark">
            </div> 

        </div>
      </div>
    </section>


    
 

  </main>

  <footer id="footer" class="footer light-background">

<div class="container footer-top mb-5">
<div class="row gy-4">
  <div class="col-lg-4 col-md-6 footer-about">
    <a href="index.php" class="logo d-flex align-items-center">
      <span class="sitename">Contact Us</span>
    </a>
    <div class="footer-contact pt-3">
      <p >Metro Iloilo Hospital & Medical Center, Inc.</p>
      <p class="mt-3 ">Metropolis Ave, Brgy. Tagbak,</p>
      <p>Jaro, Iloilo City, Iloilo, Philippines</p>
      <p class="mt-3"><strong>Phone:</strong> <span>(033) 327-1527</span></p>
      <p><strong>Email:</strong> <span>(033) 327-2030</span></p>
    </div>
    
  </div>

  <div class="col-lg-2 col-md-3 footer-links">
    <h4 >QUICK ACCESS</h4>
    <ul>
      <li><a  href="../Project-Web1/about.php">About</a></li>
      <li><a  href="../Project-Web1/faq.php">FAQ</a></li>
      <li><a href="../Project-Web1/contact.php">Contact</a></li>
      <li><a href="../Project-Web1/services.php">Services</a></li>
    </ul>
  </div>

  <div class="col-lg-2 col-md-3 footer-links">
    <h4>MIHMCI</h4>
    <ul>
      <li><a  href="../Project-Web1/rates.php">Rates</a></li>
      <li><a  href="../Project-Web1/packages.php">Packages</a></li>
      <li><a  href="../Project-Web1/doctor.php">Doctor's</a></li>
    </ul>
  </div>

  <div class="col-lg-4 col-md-3 footer-links">
    <h4>Social Media</h4>
    <ul>
      <li><a href="#"><b>Check our social media accounts and stay connected.</b></a></li>
    </ul>

    <div class="social-links d-flex mt-4">
      <a  href="https://x.com/IloiloMetro" target="_blank"><i class="bi bi-twitter-x"></i></a>
      <a  href="https://www.facebook.com/MIHMCIPH/?ref=embed_page" target="_blank"><i class="bi bi-facebook"></i></a>
      <a  href="https://ph.pinterest.com/metroiloilohospitalph/" target="_blank"><i class="bi bi-pinterest"></i></a>
    </div>
  </div>



</div>
</div>

<div class="container-fluid copyright text-center">
<p>© <span >2024</span> <strong class="px-1 sitename ">Metro Iloilo Hospital <span>& Medical Center, Inc.</span></strong></p>
<div class="credits">

</div>
</div>

</footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>