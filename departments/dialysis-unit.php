<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dialysis</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
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
  <link href="../assets/css/main.css" rel="stylesheet">


</head>

<body class="service-details-page">

<header id="header" class="header sticky-top" style="background-color: rgb(27, 64, 128);">
    <div class="branding d-flex align-items-center">
      
      <div class="container-fluid position-relative d-flex align-items-center justify-content-end" style="margin-left: 10px;">
        <a href="../index.php" class="logo d-flex align-items-center me-auto">
          <img src="../Images/HrmakeLong new.png" alt="logo" class="img-fluid" style="max-height: 95px; height: auto;">
        </a>
  
        <nav id="navmenu" class="navmenu" style="margin: 0 auto;">
          <ul>
            <li><a href="../index.php"  style="font-size: 15px;">Home</a></li>
            <li><a href="../about.php" style="font-size: 15px;">About</a></li>
            <li><a href="../services.php" style="font-size: 15px;">Services</a></li>
            <li><a href="../departments.php" class="active" style="font-size: 15px;">Departments</a></li>
            <li><a href="../doctor.php" style="font-size: 15px;">Doctors</a></li>
            <li class="dropdown"><a href="#"><span style="font-size: 15px;">Rates & Packages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="../rates.php" style="font-size: 15px;">Rates</a></li>
                <li><a href="../packages.php" style="font-size: 15px;" >Packages</a></li>
              </ul>
            </li>
            <li><a href="../faq.php" style="font-size: 15px;">FAQ'S</a></li>
            <li><a href="../contact.php" style="font-size: 15px;">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
  
         <!-- Search Form -->
         <form class="d-flex ms-3" action="doctor.php" method="get" role="search">
          <input class="form-control me-2" type="search" name="query" placeholder="Search doctors" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
  
      </div>
    </div>
  </header>

  <main class="main">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2 class="text-center mt-5">Hemodialysis Unit</h2>
  <p class="title-paragraph text-center mt-4" style="font-size: 25px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">8:00AM to 7:00PM Mon to Sat | 2nd Floor | 327-1527 loc. 8207</p>
</div><!-- End Section Title -->



  <style>
    .gallery img {
      width: 100%;
      cursor: pointer;
      border-radius: 5px;
      transition: transform 0.3s;
    }
    .gallery img:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>



<section>
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h2 class="display-4 fw-bold">Explore Our Rates & Services</h2>
				<p class="lead">We offer a wide range of prescriptions, over-the-counter products, and expert health advice at competitive prices. Your health is our priority.</p>
        <a href="../rates.php" class="btn btn-primary rounded-pill py-md-3 px-md-5 ">Rates</a>
        <a href="../packages.php" class="btn btn-primary rounded-pill py-md-3 px-md-5 mx-2">Packages</a>
			</div>
			<div class="col-md-6 offset-md-1 my-3">
				<p class="lead">Our Hemodialysis Unit is dedicated to providing comprehensive, compassionate, and state-of-the-art care for patients with kidney failure. Equipped with advanced dialysis technology and staffed by highly skilled nephrologists, nurses, and technicians, our unit ensures a safe and comfortable environment for your treatment. </p>
				<p class="lead">We focus on individualized care plans to meet the unique needs of each patient, aiming to improve quality of life and support long-term health. With a commitment to excellence, our team is here to guide you through every step of your dialysis journey, offering education, support, and the highest standard of medical care.</p>
			</div>
		</div>
	</div>
</section>


  <!-- Pictures -->
  <div class="container my-4">
  
  <div class="row gallery">
    <!-- Column 1 -->
    <div class="col-md-4">
      <img src="../Images/dialysis-1.jpg" alt="Image 1" class="img-thumbnail" onclick="openModal(this.src)">
    </div>
    <!-- Column 2 -->
    <div class="col-md-4">
      <img src="../Images/dialysis-2.jpg" alt="Image 2" class="img-thumbnail" onclick="openModal(this.src)">
    </div>
    <!-- Column 3 -->
    <div class="col-md-4">
      <img src="../Images/dialysis-3.jpg" alt="Image 3" class="img-thumbnail" onclick="openModal(this.src)">
    </div>
  </div>
</div>

  <!-- Pictures -->
  <div class="container my-5">
  <div class="row gallery">
    <!-- Column 1 -->
    <div class="col-md-4">
      <img src="../Images/dialysis-4.jpg" alt="Image 1" class="img-thumbnail" onclick="openModal(this.src)">
    </div>
    <!-- Column 2 -->
    <div class="col-md-4">
      <img src="../Images/dialysis-5.jpg" alt="Image 2" class="img-thumbnail" onclick="openModal(this.src)">
    </div>
    <!-- Column 3 -->
    <div class="col-md-4">
      <img src="../Images/dialysis-6.jpg" alt="Image 3" class="img-thumbnail" onclick="openModal(this.src)">
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content" style="border: none;">
      <div class="modal-body text-center position-relative p-0">
        <!-- Close button (X) in top right corner -->
        <button type="button" class="btn-close position-absolute top-0 end-0 m-3" aria-label="Close" id="closeModalButton"></button>
        <img id="modalImage" src="" alt="Large view" class="img-fluid" style="max-width: 100%; height: auto; border: none;">
      </div>
    </div>
  </div>
</div>

<script>
  // JavaScript function to open the modal with the selected image
  function openModal(src) {
    document.getElementById('modalImage').src = src;
    var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
    myModal.show();
  }

  // Close button functionality
  document.getElementById('closeModalButton').addEventListener('click', function() {
    var myModalEl = document.getElementById('imageModal');
    var modal = bootstrap.Modal.getInstance(myModalEl); // Retrieve the Bootstrap modal instance
    modal.hide(); // Close the modal
  });
</script>


<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>


    

      
          <!-- Starter Section Section --8
          <section id="starter-section" class="starter-section section">
      
            <div class="container" data-aos="fade-up">
              <p>Use this page as a starter for your own custom pages.</p>
            </div6
      
          </section><!-- /Starter Section Section -->

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
          <li><a  href="../about.php">About</a></li>
          <li><a  href="../faq.php">FAQ</a></li>
          <li><a href="../contact.php">Contact</a></li>
          <li><a href="../services.php">Services</a></li>
        </ul>
      </div>
    
      <div class="col-lg-2 col-md-3 footer-links">
        <h4>MIHMCI</h4>
        <ul>
          <li><a  href="../rates.php">Rates</a></li>
          <li><a  href="../packages.php">Packages</a></li>
          <li><a  href="../doctor.php">Doctor's</a></li>
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