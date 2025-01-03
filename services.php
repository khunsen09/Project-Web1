<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Service Details</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="./Images/icon.PNG" rel="icon">
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

<body class="service-details-page">

 
  <header id="header" class="header sticky-top" style="background-color: rgb(27, 64, 128);">
    <div class="branding d-flex align-items-center">
      
      <div class="container-fluid position-relative d-flex align-items-center justify-content-end" style="margin-left: 10px;">
        <a href="index.php" class="logo d-flex align-items-center me-auto">
          <img src="Images/HrmakeLong new.png" alt="logo" class="img-fluid" style="max-height: 95px; height: auto;">
        </a>
  
        <nav id="navmenu" class="navmenu" style="margin: 0 auto;">
          <ul>
            <li><a href="index.php" class="active" style="font-size: 15px;">Home</a></li>
            <li><a href="about.php" style="font-size: 15px;">About</a></li>
            <li><a href="#services" style="font-size: 15px;">Services</a></li>
            <li><a href="departments.php" style="font-size: 15px;">Departments</a></li>
            <li><a href="#doctors" style="font-size: 15px;">Doctors</a></li>
            <li class="dropdown"><a href="#"><span style="font-size: 15px;">Rates & Packages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="rates.php" style="font-size: 15px;">Rates</a></li>
                <li><a href="packages.php" style="font-size: 15px;" >Packages</a></li>
              </ul>
            </li>
            <li><a href="faq.php" style="font-size: 15px;">FAQ'S</a></li>
            <li><a href="contact.php" style="font-size: 15px;">Contact</a></li>
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
    .services .card {
      display: flex;
      flex-direction: column;
      height: 100%;
      text-align: center; /* Center-align text and elements */
    }
  
    .services .card-body {
      display: flex;
      flex-direction: column;
      align-items: center; /* Center content horizontally */
      justify-content: space-between;
      flex-grow: 1;
    }
  
    .services .btn-outline-primary {
      margin-top: auto;
    }
  
    .services .bi {
      display: inline-block;
      margin: 0 auto;
    }
  </style>
  <!-- Service 9 - Bootstrap Brain Component -->
  <section id="services" class="services section bg-light py-3 py-md-5 py-xl-8 services" >
    <div class="container">
       <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2 class="text-center mb-3">Our Services</h2>
          <p class="title-paragraph text-center mb-5" style="font-size: 25px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">We provide expert medical care with advanced treatments, diagnostics, and personalized attention, ensuring your health and well-being in a compassionate environment.</p>
        </div><!-- End Section Title -->
    </div>
    
  <!--1-->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="container-fluid">
            <div class="row gy-3 gy-md-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
              <div class="col">
                <div class="card h-100 border-dark">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <img src="https://cdn-icons-png.flaticon.com/512/1106/1106992.png" alt="OPCC Icon" width="48" height="48" class="mb-4 text-primary">
                    <h4 class="mb-4">Pharmacy</h4>
                    <p class="mb-4 lead">Provides a wide range of medicines for our admitted patients as well as outpatient.</p>
                    <a href="departments/pharmacy.php" class="btn btn-outline-primary bsb-btn-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Repeat similar structure for other cards -->
              <div class="col">
                <div class="card h-100 border-dark">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/laparoscopy-1609480-1362222.png" alt="OPCC Icon" width="48" height="48" class="mb-4 text-primary">
                    <h4 class="mb-4">Laparoscopic Surgery</h4>
                    <p class="mb-4 lead">We offer laparoscopic surgery, a minimally invasive option using small incisions for faster recovery and less scarring. Our expert team provides safe, effective care to help you return to daily life quickly.</p>
                    <a href="departments/laparascopic.php" class="btn btn-outline-primary bsb-btn-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Additional cards with the same structure -->
              <div class="col">
                <div class="card h-100 border-dark">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <img src="https://cdn-icons-png.flaticon.com/512/5278/5278330.png" alt="OPCC Icon" width="48" height="48" class="mb-4 text-primary">
                    <h4 class="mb-4">One Endoscopy Unit</h4>
                    <p class="mb-4 lead">• Esophagogastroduodenoscopy <br> • ERP | Colonoscopy | Bronchoscopy</p>
                    <a href="departments/endoscopy.php" class="btn btn-outline-primary bsb-btn-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
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
    </div>
<!--2-->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <div class="container-fluid">
            <div class="row gy-3 gy-md-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
              <div class="col">
                <div class="card h-100 border-dark">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <img src="https://www.svgrepo.com/show/326007/outpatient.svg" alt="OPCC Icon" width="48" height="48" class="mb-4 text-primary">
                    <h4 class="mb-4">Out-patient Care Complex (OPCC)</h4>
                    <p class="mb-4 lead">The Out Patient Care Complex designated as (OPCC) is located on the third floor of the MIHMCI main building. This is a Multi-Disciplinary Medical Complex Department created to provide multilevel “one stop shop” healthcare services to the patients. It is composed of 38 clinic rooms and offices that houses a wide variety of specialty clinics such.</p>
                    <a href="departments/outpatient.php" class="btn btn-outline-primary bsb-btn-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Repeat similar structure for other cards -->
              <div class="col">
                <div class="card h-100 border-dark">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <img src="https://png.pngtree.com/png-clipart/20230417/original/pngtree-diagnostic-line-icon-png-image_9063609.png" alt="OPCC Icon" width="48" height="48" class="mb-4 text-primary">
                    <h4 class="mb-4">Diagnostic & Ancillary Services</h4>
                    <h6 class="text-start"><strong>Radiology</strong></h6>
                    <p class="mb-4 lead text-start">• Digital Radiology X-Ray | C-Arm | Portable X-Ray | Mammography <br> • High Resolution CT Scan <br>• General/OB Ultrasound with 4D<br> • Liver Elastography </p>
                    <a href="departments/radiology.php" class="btn btn-outline-primary bsb-btn-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                      </svg>
                    </a>
                    <h6 class="text-start mt-4"><strong>Cardiology/Pulmonary</strong></h6>
                    <p class="mb-4 lead text-start">• 2D Echocardiology 
                      <br> • Stress Test <br>• ABG Analysis <br> • CPAP/BIPAP                    </p>
                    <a href="departments/cardio-pulmo.php" class="btn btn-outline-primary bsb-btn-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Additional cards with the same structure -->
              <div class="col">
                <div class="card h-100 border-dark">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <img src="https://cdn-icons-png.flaticon.com/512/83/83672.png" alt="OPCC Icon" width="48" height="48" class="mb-4 text-primary">
                    <h4 class="mb-4">Laboratory</h4>
                    <h6 class="text-start mt-4"><strong>Fully Automated 24-Hour Laboratory Services:</strong></h6>
                    <p class="mb-4 lead text-start">•
                      <strong> Bacteriology </strong><br>Culture & Sensi ETA, Throat Swab, etc...<br>
                     • <strong> Blood Bank </strong><br>Blood Typing, RH Typing, etc...                     <br>  
                     • <strong> Hematology </strong><br>CBC, Platelet Count, etc...<br>  
                     • <strong>Clinical Microscopy </strong><br>Ketone, Urinalysis, Fecalysis, etc... <br>  
                     • <strong> Clinical Chemistry </strong><br>Creatinine, HBA1c, SGPT, Uric Acid, etc...<br>  
                     • <strong> Serology </strong><br>Pregnancy Test, AFP, Dengue NS1 AG, etc...<br>  
                    </p>
                    <a href="departments/laboratory.php" class="btn btn-outline-primary bsb-btn-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
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
    </div>
    <!--3-->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <div class="container-fluid">
            <div class="row gy-3 gy-md-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
              <div class="col">
                <div class="card h-100 border-dark">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <img src="https://cdn-icons-png.flaticon.com/512/3596/3596003.png" alt="OPCC Icon" width="48" height="48" class="mb-4 text-primary">
                    <h4 class="mb-4">Operating Room Complex</h4>
                    <p class="mb-4 lead text-start">• Digital Radiology X-Ray | C-Arm | Portable X-Ray | Mammography 
                      <br> • Operating Room
                      <br>• Delivery Room
                      <br> • Recovery Room 
                      <br> • Birthing Suite
                    </p>
                    <a href="departments/operating-room.php" class="btn btn-outline-primary bsb-btn-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Repeat similar structure for other cards -->
              <div class="col">
                <div class="card h-100 border-dark">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <img src="https://cdn-icons-png.flaticon.com/512/979/979008.png" alt="OPCC Icon" width="48" height="48" class="mb-4 text-primary">
                    <h4 class="mb-4">Intensive Care Unit</h4>
                    <p class="mb-4 lead text-start">• Medical - ICU
                      <br> • Neonatal - ICU
                      <br>• Pediatric - ICU
                      <br> • Surgical - ICU 
                    </p>
                    <a href="departments/intensive-care.php" class="btn btn-outline-primary bsb-btn-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Additional cards with the same structure -->
              <div class="col">
                <div class="card h-100 border-dark">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <img src="https://cdn-icons-png.flaticon.com/512/9733/9733672.png" alt="OPCC Icon" width="48" height="48" class="mb-4 text-primary">
                    <h4 class="mb-4">Emergency Room Services</h4>
                    <p class="mb-4 lead text-start">• 2 Pediatric Beds
                      <br> • 2 OB-GYNE Beds
                      <br>• 2 Trauma Beds
                      <br>• 1 Isolation Bed 
                      <br>• 5 Medical/Surgical Beds
                    </p>
                    <a href="departments/emergency-room.php" class="btn btn-outline-primary bsb-btn-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
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
    </div>
    <!--4-->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <div class="container-fluid">
            <div class="row gy-3 gy-md-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
              <div class="col">
                <div class="card h-100 border-dark">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <img src="https://static.thenounproject.com/png/2225066-200.png" alt="OPCC Icon" width="48" height="48" class="mb-4 text-primary">
                    <h4 class="mb-4">Hemodialysis Unit</h4>
                    <p class="mb-4 lead">Equiped with high-end machines to cater patients</p>
                    <a href="departments/dialysis-unit.php" class="btn btn-outline-primary bsb-btn-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Repeat similar structure for other cards -->
              <div class="col">
                <div class="card h-100 border-dark">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <img src="https://cdn-icons-png.flaticon.com/512/163/163008.png" alt="OPCC Icon" width="48" height="48" class="mb-4 text-primary">
                    <h4 class="mb-4">Rehabilitation Center</h4>
                    <p class="mb-4 lead text-start">• Electrotherapy
                      <br> • Manual Therapy
                      <br>• Gait Re-training
                      <br>• Pain Management 
                    </p>
                    <a href="departments/rehabilitation.php" class="btn btn-outline-primary bsb-btn-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              
              <div class="col">
                <div class="card h-100 border-dark">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <img src="https://cdn-icons-png.flaticon.com/512/2719/2719428.png" alt="OPCC Icon" width="48" height="48" class="mb-4 text-primary">
                    <h4 class="mb-4">Arthroscopy</h4>
                    <p class="mb-4 lead">A minimally invasive surgical procedure on a joint in which an examination and sometimes treatment of damage is performed using an arthroscope.</p>
                 
                  </div>
                </div>
              </div>
             
     
            </div>
          </div>
        </div>
      </div>
    </div>
       <!--5-->
       <div class="container mt-5">
        <div class="row">
          <div class="col-12">
            <div class="container-fluid">
              <div class="row gy-3 gy-md-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                 <!-- Repeat similar structure for other cards -->
                 <div class="col">
                  <div class="card h-100 border-dark">
                    <div class="card-body text-center p-4 p-xxl-5">
                      <img src="https://cdn4.iconfinder.com/data/icons/coronavirus-188/100/covid-test-nasal_swab-coronavirus-laboratory-negative-512.png" alt="OPCC Icon" width="48" height="48" class="mb-4 text-primary">
                      <h4 class="mb-4">Covid Lab</h4>
                      <p class="mb-4 lead">Our COVID-19 lab provides fast, accurate PCR and rapid antigen tests, ensuring reliable results to protect the health and safety of our patients and community.</p>
                    </div>
                  </div>
                </div>
                
                <div class="col">
                  <div class="card h-100 border-dark">
                    <div class="card-body text-center p-4 p-xxl-5">
                      <img src="https://cdn-icons-png.flaticon.com/512/2707/2707294.png" alt="OPCC Icon" width="48" height="48" class="mb-4 text-primary">
                      <h4 class="mb-4">Ambulance Service</h4>
                      <p class="mb-4 lead">"24H Availability of Ambulance."</p>
                    </div>
                  </div>
                </div>
               
                <!-- Additional cards with the same structure -->
                <div class="col">
                  <div class="card h-100 border-dark">
                    <div class="card-body text-center p-4 p-xxl-5">
                      <img src="https://cdn-icons-png.flaticon.com/512/3373/3373025.png" alt="OPCC Icon" width="48" height="48" class="mb-4 text-primary">
                      <h4 class="mb-4">Dietary</h4>
                      <p class="mb-4 lead">"Nutrition & Diabetic Services"</p>
                    </div>
                  </div>

                         
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

          
  </section>
  
  

  
  <!-- Clients Section -->
 <section id="clients" class="clients section">
  <!-- Section Title -->
  <div class="container section-title mb-4" data-aos="fade-up">
   <a href="hmo.php"><h2 class="text-center">OUR HMO</h2></a>
 </div><!-- End Section Title -->

<div class="container" data-aos="zoom-in">

<div class="swiper init-swiper">
 <script type="application/json" class="swiper-config">
   {
     "loop": true,
     "speed": 600,
     "autoplay": {
       "delay": 5000
     },
     "slidesPerView": "auto",
     "pagination": {
       "el": ".swiper-pagination",
       "type": "bullets",
       "clickable": true
     },
     "breakpoints": {
       "320": {
         "slidesPerView": 2,
         "spaceBetween": 40
       },
       "480": {
         "slidesPerView": 3,
         "spaceBetween": 60
       },
       "640": {
         "slidesPerView": 4,
         "spaceBetween": 80
       },
       "992": {
         "slidesPerView": 5,
         "spaceBetween": 120
       },
       "1200": {
         "slidesPerView": 6,
         "spaceBetween": 120
       }
     }
   }
 </script>

 
 <div class="swiper-wrapper align-items-center">
   <div class="swiper-slide"><img src="../Images/Mediafix Healthcare - Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/Health Maintenance Inc - Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/Generali - Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/Valucare -  Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/Eastwest Healthcare - Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/Philcare -Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/Insular Healthcare - Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/Avega Healthcare Solutions - Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/Paciifc Cross Philippines - Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/Intellicare - Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/Allianz PNB Life Insurance - Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/Asianlife and General Assurance Corporation -Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/Carehealth Plus - Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/Maxicare - Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/Cocolife Healthcare - Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/hppi -Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/Wellcare Health Plans - Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/Kaiser Permanente - Accredited HMO.jpg" class="img-fluid" alt=""></div>
   <div class="swiper-slide"><img src="../Images/IMS Wellth Care Inc - Accredited HMO.jpg" class="img-fluid" alt=""></div>
 </div>
</div>

</div>

</section><!-- /Clients Section -->

  

    
    
    
  
    

     

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