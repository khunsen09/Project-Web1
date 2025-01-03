<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAprzkWHk0USe-8NEgra34MnmzKOv2es4hDQ&s" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<style>
  .btn-primary:hover {
    background-color: #0056b3; /* Change to a darker shade on hover */
    border-color: #004085; /* Adjust the border color */ 
  }
  
  .border-box {
    border: 2px solid #ffffff; /* Adjust color and width as needed */
    border-radius: 8px; /* Optional: for rounded corners */
    padding: 15px; /* Optional: add some padding inside the box */
    background-color: rgba(0, 0, 0, 0.5); /* Optional: add background color */
}

.services .row.d-flex {
    display: flex;
  }

  .services .row.d-flex .col-sm-6 {
    display: flex;
    flex-direction: column;
  }

  .services .card {
    flex-grow: 1; /* Make cards grow to fill the column */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Space between content and footer */
    height: 100%; /* Ensures the card takes the full height of the column */
  }

  .services .card-body {
    flex-grow: 1; /* Allows card body to expand */
  }
  
  .gallery img {
      width: 100%;
      cursor: pointer;
      border-radius: 5px;
      transition: transform 0.3s;
    }
    .gallery img:hover {
      transform: scale(1.05);
    }



    
    .hero {
  width: 100%;
  min-height: 100vh;
  position: relative;
  padding: 120px 0 80px 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero img {
  position: absolute;
  inset: 0;
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 1;
}

.hero:before {
  content: "";
  /* background: color-mix(in srgb, var(), transparent 30%); */
  position: absolute;
  inset: 0;
  z-index: 2;
}

.hero .container {
  position: relative;
  z-index: 3;
}

.hero h2 {
  margin: 0;
  font-size: 76px;
  font-weight: 700;
  font-family: Arial, Helvetica, sans-serif;
}

.hero h2 span {
  color: var(--accent-color);
}

.hero p {
  margin: 10px 0 0 0;
  font-size: 24px;
  color: color-mix(in srgb, var(--default-color), transparent 30%);
}

.hero .icon-box {
  padding: 30px 20px;
  transition: ease-in-out 0.3s;
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 70%);
  height: 100%;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.hero .icon-box i {
  font-size: 32px;
  line-height: 1;
  color: var(--accent-color);
}

.hero .icon-box h3 {
  font-weight: 700;
  margin: 10px 0 0 0;
  padding: 0;
  line-height: 1;
  font-size: 20px;
  line-height: 26px;
}

.hero .icon-box h3 a {
  color: color-mix(in srgb, var(--default-color), transparent 20%);
  transition: ease-in-out 0.3s;
}

.hero .icon-box:hover {
  border-color: var(--accent-color);
}

.hero .icon-box:hover h3 a {
  color: var(--accent-color);
}

@media (max-width: 768px) {
  .hero h2 {
    font-size: 32px;
  }

  .hero p {
    font-size: 18px;
  }
}

html {
  scroll-behavior: smooth;
}

</style>

<body class="index-page">


  

  <main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section position-relative">
  <video autoplay muted loop playsinline class="w-100 h-100 position-absolute top-0 start-0" style="object-fit: cover;">
    <source src="../Project-Web1/Images/metro-video.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div class="container position-relative z-index-1 text-white">
    <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-xl-10 col-lg-8">
        <h2 class="display-4" style="color: #ffffff;">Metro Iloilo Hospital & Medical Center, Inc<span>.</span></h2>
        <p>Making Innovations for your Health & Medical Care</p>
      </div>
    </div>
  </div>

  <!-- Add an overlay for better text visibility -->
  <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.5;"></div>
</section>

<!-- Header -->
<header id="header" class="header sticky-top" style="background-color: rgb(27, 64, 128); display: none;">
  <div class="branding d-flex align-items-center">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-end" style="margin-left: 10px;">
      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <img src="Images/HrmakeLong new.png" alt="logo" class="img-fluid" style="max-height: 95px; height: auto;">
      </a>

      <nav id="navmenu" class="navmenu" style="margin: 0 auto;">
        <ul>
          <li><a href="#hero" class="active" style="font-size: 15px;">Home</a></li>
          <li><a href="#about" style="font-size: 15px;">About</a></li>
          <li><a href="#services" style="font-size: 15px;">Services</a></li>
          <li><a href="#department" style="font-size: 15px;">Departments</a></li>
          <li><a href="#doctors" style="font-size: 15px;">Doctors</a></li>
          <li class="dropdown"><a href="#"><span style="font-size: 15px;">Rates & Packages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="rates.php" style="font-size: 15px;">Rates</a></li>
              <li><a href="packages.php" style="font-size: 15px;" >Packages</a></li>
            </ul>
          </li>
          <li><a href="#gallery" style="font-size: 15px;">FAQ'S</a></li>
          <li><a href="#contact" style="font-size: 15px;">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <form class="d-flex ms-3" action="doctor.php" method="get" role="search">
        <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</header>

<script>
  // JavaScript to show the header after the video section
  window.addEventListener('scroll', function() {
    var heroHeight = document.getElementById('hero').offsetHeight;
    var header = document.getElementById('header');
    
    if (window.scrollY > heroHeight) {
      header.style.display = 'block';  // Show header
    } else {
      header.style.display = 'none';  // Hide header
    }
  });
</script>



   



 

    <!-- About Section -->
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2 class="text-center" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">About Us</h2>
  </div><!-- End Section Title -->

  
  
  <div class="container" data-aos="fade-up" data-aos-delay="500">
  
    <!-- <h2 class="text-center" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Metro Iloilo Hospital & Medical Center, Inc.</h2> -->
    <div class="row">
      <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
        <p class="lead">
          Sometime in 1997, Dr. Angelo “Anji” and Dr. Ma. Mercedita “Lana” Alcala opened the idea of building a hospital for the Ilonggos to Dr. Evelyn “Bukay” Lozada, Dr. Roberto “Bob” Lozada and later on to Dr. Danilo “Dan” Encarnacion. Except for Dr. Bob the four were very close friends being classmates in West Visayas State College of Medicine. Drs. Anji & Lana wanted to share their experience, having been involved in the building of several hospitals in Metro Manila.
        </p>
        
  <div class="container">



  <div class="row gy-4 d-flex justify-content-center align-items-center my-4">
  <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
    <div class="position-relative">
      <img src="Images/metro-iloilo-page.jpg" class="img-fluid" alt="">
      <!-- Centered play button -->
      <a href="https://metroiloilohospital.com/vid/mm.mp4#t=02" 
         class="glightbox pulsating-play-btn position-absolute top-50 start-50 translate-middle">
      </a>
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



        <!--close button-->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-body text-center">
                <img id="modalImage" src="" alt="Large view" class="img-fluid">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="closeModalButton">Close</button>
              </div>
            </div>
          </div>
        </div>
        <ul>
          <li class="mt-3 lead" ><i></i> <span>The idea did not materialize until 14 years later when idea to build a hospital owned by doctors from Iloilo was revived.</span></li>
          <li class="mt-3 lead" ><i></i> <span>The first step taken was the formation of a core group of physicians that would be involved in the initial planning. The members were Dr. Angelo Alcala, Dr. Mercedita Lana, Dr. Danilo Encarnacion, Dr. Evelyn Lozada, Dr. Roberto Lozada, Dr. Roland Uy, Dr. Anton Juan Loa, Dr. Myrna Ong and Dr. Chester Jardiolin. Eventually, other members were recruited to complete the 15 members of the Board and they were – Dr. Danilo Valencia, Dr. Jesse Uy, Dr. Erwin Dulos, Dr. Segundo Anayan, Dr. Hannah Jabasa and Dr. Perpetua Socorro Barrera.</span></li>
          <li class="mt-3 lead"  ><i></i> <span> It was decided that the “founders” or major stockholders that would be recruited will be limited to 75 physicians that were actively practicing. Even the common shares were first offered to practicing physicians. They were expected to refer patients to the hospital in the future.</span></li>
        </ul>
        
        
        <div class="d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="500">
          <a href="About.php" class="btn btn-primary mt-4">Read More</a>
      </div>
      
      </div>
    </div>

    
  
  </div>
  
  </section><!-- /About Section -->

  
  

<!-- Service 5 - Bootstrap Brain Component -->
<!-- <section id="services" class="services bg-light py-3 py-md-5 py-xl-8">
  <div class="container overflow-hidden">
    <div class="row gy-4 gy-md-5 gy-lg-0 align-items-center">
      <div class="col-12 col-lg-5">
        <div class="row" data-aos="fade-up" data-aos-delay="500">
          <div class="col-12 col-xl-11">
              <h3 class="fs-6 text-secondary mb-3 mb-xl-4 text-uppercase">What We Do?</h3>
              <h2 class="mb-3 mb-xl-4">Providing Exceptional Care Through Our Comprehensive Services.</h2>
              <p class="mb-3 mb-xl-4" style="font-size: 18px;">At our hospital, we offer a wide range of medical services designed to cater to your health needs and promote your well-being. Our dedicated team of healthcare professionals is committed to delivering compassionate care and innovative treatments in a safe environment. Whether you require emergency services, specialized treatments, or routine check-ups, we are here to support you every step of the way. Contact us today to learn more about how we can help you achieve optimal health. Your well-being is our top priority.</p>
              <a href="services.php" class="btn bsb-btn-2xl btn-primary rounded-pill">More Details</a>
          </div>
      </div>
      
      </div>
      <div class="col-12 col-lg-7 overflow-hidden" data-aos="fade-up" data-aos-delay="500">
        <div class="row gy-4">
          <div class="col-12 col-sm-6">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
                <img src="https://cdn-icons-png.flaticon.com/512/1106/1106992.png" alt="Pharmacy Icon" width="56" height="56" class="text-primary mb-4" />
                <h4 class="mb-4">Pharmacy</h4>
                <p class="mb-4 text-secondary">Provides a wide range of medicines for our admitted patients as well as outpatient.</p>
                <a href="../Project-Web1/pharmacy.php" class="fw-bold text-decoration-none link-primary">
                  Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
                <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/laparoscopy-1609480-1362222.png" alt="Laparoscopic Surgery Icon" width="56" height="56" class="text-primary mb-4" />
                <h4 class="mb-4">Laparoscopic Surgery</h4>
                <p class="mb-4 text-secondary">Performed by the best laparascopic surgeon, Dr. Segundo Anayan, Jr.</p>
                <a href="services.php" class="fw-bold text-decoration-none link-primary">
                  Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
                <img src="https://cdn-icons-png.flaticon.com/512/5278/5278330.png" alt="Endoscopy Icon" width="56" height="56" class="text-primary mb-4" />
                <h4 class="mb-4">One Endoscopy Unit</h4>
                <p class="mb-4 text-secondary">• Esophagogastroduodenoscopy <br></p>
                <a href="services.php" class="fw-bold text-decoration-none link-primary">
                  Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
                <img src="https://www.svgrepo.com/show/326007/outpatient.svg" alt="Out-patient Care Icon" width="56" height="56" class="text-primary mb-4" />
                <h4 class="mb-4">Out-patient Care Complex (OPCC)</h4>
                <p class="mb-4 text-secondary">Provides a wide range of medicines for our admitted patients as well as outpatient.</p>
                <a href="services.php" class="fw-bold text-decoration-none link-primary">
                  Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

  
    
<section id="services" class="services bg-light py-3 py-md-5 py-xl-8" style="background-image: url(''); background-size: cover; background-position: center; background-attachment: fixed;">
  <div class="container overflow-hidden">
    <div class="row gy-4 gy-md-5 gy-lg-0 align-items-center">
      <div class="col-12 col-lg-5">
        <div class="row" data-aos="fade-up" data-aos-delay="500">
          <div class="col-12 col-xl-11">
              <h3 class="fs-6 text-secondary mb-3 mb-xl-4 text-uppercase">What We Do?</h3>
              <h2 class="mb-3 mb-xl-4">Providing Exceptional Care Through Our Comprehensive Services.</h2>
              <p class="mb-3 mb-xl-4 lead" >At our hospital, we offer a wide range of medical services designed to cater to your health needs and promote your well-being. Our dedicated team of healthcare professionals is committed to delivering compassionate care and innovative treatments in a safe environment. Whether you require emergency services, specialized treatments, or routine check-ups, we are here to support you every step of the way. Contact us today to learn more about how we can help you achieve optimal health. Your well-being is our top priority.</p>
              <a href="services.php" class="btn bsb-btn-2xl btn-primary rounded-pill">More Details</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-7 overflow-hidden" data-aos="fade-up" data-aos-delay="500">
        <div class="row gy-4">
          <div class="col-12 col-sm-6">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
                <img src="https://cdn-icons-png.flaticon.com/512/1106/1106992.png" alt="Pharmacy Icon" width="56" height="56" class="text-primary mb-4" />
                <h4 class="mb-4">Pharmacy</h4>
                <p class="mb-4 lead">Provides a wide range of medicines for our admitted patients as well as outpatient.</p>
                <a href="../Project-Web1/pharmacy.php" class="fw-bold text-decoration-none link-primary">
                  Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
                <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/laparoscopy-1609480-1362222.png" alt="Laparoscopic Surgery Icon" width="56" height="56" class="text-primary mb-4" />
                <h4 class="mb-4">Laparoscopic Surgery</h4>
                <p class="mb-4 lead">Performed by the best laparascopic surgeon, Dr. Segundo Anayan, Jr.</p>
                <a href="services.php" class="fw-bold text-decoration-none link-primary">
                  Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
                <img src="https://cdn-icons-png.flaticon.com/512/5278/5278330.png" alt="Endoscopy Icon" width="56" height="56" class="text-primary mb-4" />
                <h4 class="mb-4">One Endoscopy Unit</h4>
                <p class="mb-4 lead">• EGD <br></p>
                <a href="services.php" class="fw-bold text-decoration-none link-primary">
                  Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
                <img src="https://www.svgrepo.com/show/326007/outpatient.svg" alt="Out-patient Care Icon" width="56" height="56" class="text-primary mb-4" />
                <h4 class="mb-4">Out-patient Care Complex (OPCC)</h4>
                <p class="mb-4 lead">Provides a wide range of medicines for our admitted patients as well as outpatient.</p>
                <a href="services.php" class="fw-bold text-decoration-none link-primary">
                  Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    



  
  

    
    <!-- Tabs Section -->
<section id="tabs" class="tabs my-2">
  <!-- Section Title -->
  <div id="department" class="section  container section-title" data-aos="fade-up">
    <h2 class="text-center mb-4" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Departments</h2>
    <p class="text-center mb-5" style="font-size: 18px;">Our Department is dedicated to providing specialized, high-quality care with a team of experts committed to meeting each patient’s unique needs.</p>
  </div><!-- End Section Title -->
  
  <div class="container" data-aos="fade-up" data-aos-delay="100">
  
    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tabs-tab-1">Pharmacy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-2">Laparascopic Surgery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-3">One Endoscopy Unit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-4">Out-Patient Care Complex</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-5">Cardio-Pulmo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-6">Radiology</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-7">Operating Room Complex</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-8">Intensive Care Unit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-9">Emergency Room</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-10">Dialysis Unit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-11">Rehabilitation Center</a>
          </li>
         
        </ul>
      </div>
       <!--End Section -->
      <div class="col-lg-9 mt-4 mt-lg-0" style="font-size: 18px;">
        <div class="tab-content">
          <div class="tab-pane active show" id="tabs-tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Pharmacy</h3>
                <p class="lead">Provides the best possible pharmaceutical care experience through responsible and accurate drug therapy, for the purpose of achieving good patient care outcomes that will improve the quality of life. will served as an emblem of good dispensing practice and will be a leader in providing innovative, progressive, high quality and patient centered pharmacy services through continuum pharmaceutical care.</p>
                  <a href="departments/pharmacy.php" class="btn btn-primary mt-3">Learn More</a>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="Images/cardio-5.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
           <!--End Section -->
          <div class="tab-pane" id="tabs-tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Laparascopic Surgery</h3>
                <p class="lead">Single Incision Laparoscopic Cholecystectomy.</p>
                <p class="lead">Almost SCARLESS surgery.</p>
                <a href="departments/laparascopic.php" class="btn btn-primary mt-3">Learn More</a>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="" alt="" class="img-fluid">
              </div>
            </div>
          </div>
           <!--End Section -->
          <div class="tab-pane" id="tabs-tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>One Endoscopy Unit</h3>
                <p class="lead">An endoscopy is used in medicine to look inside the body. The endoscopy procedure uses an endoscope to examine the interior of a hollow organ or cavity of the body.</p>
                <a href="departments/laparascopic.php" class="btn btn-primary mt-3">Learn More</a>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="Images/endoscopy-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
           <!--End Section -->
          <div class="tab-pane" id="tabs-tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Out-Patient Care Complex</h3>
                <p class="lead"> The Out Patient Care Complex designated as (OPCC) is located on the third floor of the MIHMCI main building. This is a Multi-Disciplinary Medical Complex Department created to provide multilevel “one stop shop” healthcare services to the patients. It is composed of 38 clinic rooms and offices that houses a wide variety of specialty clinics such as: the Adult Specialty Center (Gastroenterology, Pulmonary, Cardiology, Nephrology, Allergology and Dermatology), Surgical Center (General, Thoracic-Vascular, Pediatric Surgery, Urology, Neurosurgery, Orthopedic and Wound Care Center), Head, Neck and Otolaryngology Center, Children’s Center, Family Medicine and Occupational Center, Women’s Center, Neurosciences, Dental Services and Behavioral Center.    The OPCC aims to deliver the utmost compassionate healthcare services located within a single establishment.</p>
                <a href="departments/outpatient.php" class="btn btn-primary mt-3">Learn More</a>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
           <!--End Section -->
          <div class="tab-pane" id="tabs-tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Cardio-Pulmo</h3>
                <p class="lead">Our Cardiology and Pulmonology Departments offer advanced diagnostic and treatment options, with a team of specialists dedicated to heart and lung health for comprehensive, compassionate care.</p>

                <a href="departments/cardio-pulmo.php" class="btn btn-primary mt-3">Learn More</a>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="Images/cardio-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <!--End Section -->
          <div class="tab-pane" id="tabs-tab-6">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Radiology</h3>
                <p class="lead">The best medical imaging provider in Iloilo City. State of the art diagnostic imaging modalities. Qualified and competent diagnostic consultants and personnel with continuous medical education and training or consultants and staff. Promotes a prompt diagnostic results Application of Hospital Information System To come up with residency training and research program To provide convenience and comfort by bringing diagnostic equipments to patient.</p>
                <a href="departments/radiology.php" class="btn btn-primary mt-3">Learn More</a>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="Images/radiology-13.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <!--End Section -->
          <div class="tab-pane" id="tabs-tab-7">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Operating Room Complex</h3>
                <p class="lead">Our Operating Room Complex is a modern, high-tech facility designed for a wide range of surgical procedures. Staffed by expert surgeons and support teams, it ensures safe, precise, and compassionate care to achieve the best outcomes for our patients.</p>
                <a href="departments/operating-room.php" class="btn btn-primary mt-3">Learn More</a>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="Images/operating-12.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <!--End Section -->
          <div class="tab-pane" id="tabs-tab-8">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Intensive Care Unit</h3>
                <p class="lead">Our Intensive Care Unit (ICU) provides specialized, around-the-clock care for critically ill patients. Staffed by expert medical professionals and equipped with advanced technology, our ICU ensures each patient receives personalized, immediate attention to support recovery and well-being.</p>
                <a href="departments/intensive-care.php" class="btn btn-primary mt-3">Learn More</a>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="Images/intensive-care-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <!--End Section -->
          <div class="tab-pane" id="tabs-tab-9">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Emergency Room</h3>
                <p class="lead">Our Emergency Room (ER) operates 24/7, providing rapid and efficient care for urgent medical needs. Staffed by a dedicated team of emergency specialists, we prioritize quick assessment and treatment for a wide range of conditions, ensuring that every patient receives immediate attention.</p>
                <a href="departments/emergency-room.php" class="btn btn-primary mt-3">Learn More</a>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="Images/emergency-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <!--End Section -->
          <div class="tab-pane" id="tabs-tab-10">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Dialysis Unit</h3>
                <p class="lead">Our Dialysis Unit provides specialized care for patients with kidney disease, offering hemodialysis and peritoneal dialysis in a comfortable environment. Our skilled team prioritizes personalized treatment and patient education to help individuals manage their condition and enhance their quality of life.</p>
                <a href="departments/dialysis-unit.php" class="btn btn-primary mt-3">Learn More</a>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="Images/dialysis-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <!--End Section -->
          <div class="tab-pane" id="tabs-tab-11">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Rehabilitation Center</h3>
                <p class="lead">Our Rehabilitation Center offers comprehensive care to help patients recover and regain independence following illness, injury, or surgery. With a team of skilled therapists and specialists, we provide personalized physical, occupational, and speech therapy in a supportive environment. Our goal is to guide each patient toward optimal recovery and improved quality of life.</p>
                <a href="departments/rehabilitation.php" class="btn btn-primary mt-3">Learn More</a>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="Images/rehabilitation-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <!--End Section -->

         
  
          
        </div>
      </div>
    </div>
  
  </div>
  
  </section><!-- /Tabs Section -->

  

    <!-- Doctors Section -->
<section id="doctors" class="doctors section bg-light">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2 class="text-center mb-5">SEARCH DOCTORS FOR SCHEDULES & AVAILABILITY</h2>
    <div class="input-group">
      <input 
        type="search" 
        id="searchInput" 
        class="form-control rounded" 
        placeholder="Search Doctor Name" 
        aria-label="Search" 
        aria-describedby="search-addon" 
      />
      <!-- Search Button -->
      <button 
        type="button" 
        class="btn btn-outline-primary" 
        id="searchButton"
      >
        Search
      </button>
    </div>
  </div><!-- End Section Title -->
</section><!-- /Doctors Section -->

<script>
  // Get references to the input and button elements
  const searchInput = document.getElementById("searchInput");
  const searchButton = document.getElementById("searchButton");

  // Add event listener for the search button click
  searchButton.addEventListener("click", () => {
    const query = searchInput.value.trim(); // Get the search query from input field

    if (query) {
      // Redirect to doctor.php with query parameter
      window.location.href = `doctor.php?query=${encodeURIComponent(query)}`;
    } else {
      // Alert if the input field is empty
      alert("PLEASE ENTER A DOCTOR NAME.");
    }
  });

  // Optional: Allow user to press "Enter" to trigger search
  searchInput.addEventListener("keypress", (event) => {
    if (event.key === "Enter") {
      const query = searchInput.value.trim();
      if (query) {
        window.location.href = `doctor.php?query=${encodeURIComponent(query)}`;
      } else {
        alert("PLEASE ENTER A DOCTOR NAME.");
      }
    }
  });
</script>


  


    

<!--Faqs-->
      <!-- Section Title -->
      <div id="gallery" class="gallery section container section-title my-2" data-aos="fade-up">
        <h2 class="text-center mb-5" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Frequently Asked Questions</h2>
        <p class="text-center mt-2" style="font-size: 18px;">Find answers to common questions about our products, services, and policies. If you need more help, don’t hesitate to contact our support team!</p>
      </div><!-- End Section Title -->

       <!--Accordion-->
    <div class="container">
      <div class="row centered .custom-accordion">
          <div class="col-md-12">
              <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 20px;">
                              1. Accomodation
                          </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse"  aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                           <h5 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">ADMISSION KIT(PROVIDED NY MIHMCI)</h5>
                           <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="list-column">
                                        <ul>
                                            <li>Tissue</li>
                                            <li>Toothbrush</li>
                                            <li>Toothpaste</li>
                                            <li>Calibrated Glass</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="list-column">
                                        <ul>
                                            <li>Soap</li>
                                            <li>Cotton</li>
                                            <li>Face Towel</li>
                                            <li>Thermometer</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="list-column">
                                        <ul>
                                            <li>Alcohol</li>
                                            <li>Utensils(Spoon & Fork)</li>
                                            <li>Pillow</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">ITEM NOT TO BRING FOR YOUR STAY:</h5>
                        <div class="container">
                          <div class="col">
                              <div class="col-md-12">
                                  <div class="list-column">
                                      <ul>
                                          <li>Alcoholic Beverages, as well as personal appliances (e.g. radios, TVs, VHS players) and furniture (e.g. mats, chairs, folding beds), are strictly prohibited in patients' rooms and public waiting areas.</li>
                                          <li>No electrical appliances such as electric kettle, rice cooker, electric fan, sterilizers, etc.</li>
                                          <li>Firearms are not allowed within the hospital premises.</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" type="button" data-bs-toggle="collapse" data-bs-target="#bed-capacity" aria-expanded="false" aria-controls="bed-capacity" style="font-size: 20px;">
                            2. Bed Capacity
                          </button>
                      </h2>
                      <div id="bed-capacity" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <p>A 110 bed-capacity modernized hospital.</p>
                          </div>
                      </div>
                  </div>

                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" type="button" data-bs-toggle="collapse" data-bs-target="#rooms" aria-expanded="false" aria-controls="rooms" style="font-size: 20px;">
                             3. Rooms
                          </button>
                      </h2>
                      <div id="rooms" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <h5 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">ADMISSION KIT(PROVIDED NY MIHMCI)</h5>
                            <div class="container">
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="list-column">
                                          <ul>
                                              <li>Suite Room</li>
                                              <li>Special Suite Room</li>
                                              <li>Semi-Private Room</li>
                                              <li>Private Large Room</li>
                                              <li>Private Isolation Room</li>
                                              <li>Private Room</li>
                                              <li>Pediatric Ward</li>
                                              <li>Pediatric ICU</li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="list-column">
                                          <ul>
                                              <li>OB Ward</li>
                                              <li>Neonatal ICU</li>
                                              <li>Male Surgical Ward</li>
                                              <li>Male Medical Ward</li>
                                              <li>ICU</li>
                                              <li>ICU Isolation Room</li>
                                              <li>Hydration Ward Room</li>
                                              <li>Female Surgical Ward</li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="list-column">
                                          <ul>
                                              <li>Female Medical Ward</li>
                                              <li>ER Temporary Room</li>
                                              <li>Deluxe Private</li>
                                              <li>Birthing Suite</li>
                                              <li>Labor Room</li>
                                              <li>Recovery Room</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- <a href="#"><button class="btn btn-primary container">View More</button></a> -->
                          </div>
                      </div>
                  </div>
                  
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" type="button" data-bs-toggle="collapse" data-bs-target="#location" aria-expanded="false" aria-controls="location" style="font-size: 20px;">
                             4. Location
                          </button>
                      </h2>
                      <div id="location" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <p>Metropolis Ave, Brgy. Tagbak, Jaro, Iloilo City, Iloilo, Philippines.</p>
                              <p>Metro Iloilo Hospital & Medical Center, Inc. is the first private and complete hospital in the northeastern part of Iloilo. Being the only hospital within the 5-kilometer radius of the northeastern part of Iloilo City. We are near patients who are coming from Passi, Barotac, and Pototan, etc.</p>
                              <!-- <a href="#"><button class="btn btn-primary container">Read More</button></a> -->
                            </div>
                      </div>
                  </div>

                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed"  style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" type="button" data-bs-toggle="collapse" data-bs-target="#clinic" aria-expanded="false" aria-controls="clinic" style="font-size: 20px;">
                             5. Clinics
                          </button>
                      </h2>
                      <div id="clinic" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <p>The Out Patient Care Complex designated as (OPCC) is located on the third floor of the MIHMCI main building. This is a Multi-Disciplinary Medical Complex Department created to provide multilevel “one stop shop” healthcare services to the patients. It is composed of 38 clinic rooms and offices that houses a wide variety of specialty clinics such as: the Adult Specialty Center (Gastroenterology, Pulmonary, Cardiology, Nephrology, Allergology and Dermatology), Surgical Center (General, Thoracic-Vascular, Pediatric Surgery, Urology, Neurosurgery, Orthopedic and Wound Care Center), Head, Neck and Otolaryngology Center, Children’s Center, Family Medicine and Occupational Center, Women’s Center, Neurosciences, Dental Services and Behavioral Center.</p>
                              <!-- <a href="#"><button class="btn btn-primary container">Read More</button></a> -->
                            </div>
                      </div>
                  </div>

                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" type="button" data-bs-toggle="collapse" data-bs-target="#accredited" aria-expanded="false" aria-controls="accredited" style="font-size: 20px;">
                            6.  Accredited HMO
                          </button>
                      </h2>
                      <div id="accredited" class="accordion-collapse collapse"  aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <h5 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">ITEM NOT TO BRING FOR YOUR STAY:</h5>
                            <div class="container">
                              <div class="col">
                                  <div class="col-md-12">
                                      <div class="list-column">
                                          <ul>
                                              <li>ASIAN LIFE & GENERAL ASSURANCE CORPORATION</li>
                                              <li>AVEGA</li>
                                              <li>CAREHEALTH PLUS</li>
                                              <li>COCOLIFE HEALTHCARE</li>
                                              <li>EASTWEST HEALTHCARE</li>
                                              <li>HPPI</li>
                                              <li>INTELLICARE</li>
                                              <li>KAISER PERMANENTE</li>
                                              <li>KAISER INTERNATIONAL</li>
                                              <li>MEDICARD</li>
                                              <li>PACIFIC CROSS</li>
                                              <li>PHILCARE</li>
                                              <li>WELLCARE</li>
                                              <li>INSULAR HEALTHCARE</li>
                                              <li>ALLIANZ PNB LIFE INSURANCE</li>
                                              <li>IMS WELLTH CARE, INC.</li>
                                              <li>GENERALI</li>
                                              <li>MAXICARE</li>
                                              <li>CARITAS HEALTH SHIELD</li>
                                              <li>VALUE CARE</li>
                                          </ul>
                                          <a href="#"><button class="btn btn-primary container">Read More</button></a>
                                      </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>

                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" type="button" data-bs-toggle="collapse" data-bs-target="#internet-access" aria-expanded="false" aria-controls="internet-access" style="font-size: 20px;">
                           7.  Internet Access
                          </button>
                      </h2>
                      <div id="internet-access" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <p>Unlimited Wi-fi Access anywhere you go.</p>
                          </div>
                      </div>
                  </div>

                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" data-bs-toggle="collapse" data-bs-target="#cafeteria" aria-expanded="false" aria-controls="cafeteria" style="font-size: 20px;">
                           8.  Cafeteria / Food Court
                          </button>
                      </h2>
                      <div id="cafeteria" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <p>Located at 2ndF Ancillary Building beside the main building.</p>
                          </div>
                      </div>
                  </div>

                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" type="button" data-bs-toggle="collapse" data-bs-target="#parking-area" aria-expanded="false" aria-controls="parking-area" style="font-size: 20px;">
                            9.  Parking Area
                          </button>
                      </h2>
                      <div id="parking-area" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <p>Metro Iloilo Hospital & Medical Center, Inc., offers a free parking space than can accommodate more than 100 vehicles.</p>
                          </div>
                      </div>
                  </div>

                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" type="button" data-bs-toggle="collapse" data-bs-target="#patient" aria-expanded="false" aria-controls="patient" style="font-size: 20px;">
                            10. Patient Rights & Responsibilities
                          </button>
                      </h2>
                      <div id="patient" class="accordion-collapse collapse"  aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <h5>Rights</h5>
                            <div class="container">
                              <div class="col">
                                  <div class="col-md-12">
                                      <div class="list-column">
                                          <ul>
                                              <li>Appropriate Medical Care and Humane Treatment</li>
                                              <li>Respect and Dignity</li>
                                              <li>Privacy and Confidentiality of Patient’s Medical Records</li>
                                              <li>Personal Safety and Security</li>
                                              <li>Identity</li>
                                              <li>Information</li>
                                              <li>Communication</li>
                                              <li>Consent</li>
                                              <li>Choose Healthcare Provider and Facility</li>
                                              <li>Transfer and Continuity of Care</li>
                                              <li>Complaint Process</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-body">
                            <h5>Responsibilities</h5>
                            <div class="container">
                              <div class="col">
                                  <div class="col-md-12">
                                      <div class="list-column">
                                          <ul>
                                              <li>Provision of Information</li>
                                              <li>Following Doctor’s Suggested Treatment Plan</li>
                                              <li>Respect and Consideration</li>
                                              <li>Religious Counselling</li>
                                              <li>Billing Charges</li>
                                          </ul>
                                          <!-- <a href="#"><button class="btn btn-primary container">Read More</button></a> -->
                                      </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>

  
      
   

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-center">Contact</h2>
        <p class="text-center"><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Metropolis Ave, Brgy. Tagbak, Jaro, Iloilo City, Iloilo, Philippines</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p> 033 327-1527</p>
                  <p> 033 327-2030</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <a href="mailto:example@example.com">marketing@metroiloilohospital.com</a>
                  <a href="mailto:example@example.com">admin@metroiloilohospital.com</a>
                  <a href="mailto:example@example.com">hr@metroiloilohospital.com</a>
                  <a href="mailto:example@example.com">nso@metroiloilohospital.com</a>
                </div>
              </div><!-- End Info Item -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15678.543030320536!2d122.5809256!3d10.7625297!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee48040ce2179%3A0xa4e800a96a8b99a6!2sMetro%20Iloilo%20Hospital%20and%20Medical%20Center%2C%20Inc.!5e0!3m2!1sen!2sph!4v1729491890031!5m2!1sen!2sph" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->
     
     
    </section><!-- /Contact Section -->

  </main>

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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>