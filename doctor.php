<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Doctor</title>
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
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<style>
  .team-member {
    background: #f8f9fa;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
  }

  .member-img img {
    width: 100%;
    height: auto;
  }

  .member-info {
    padding: 15px;
    text-align: center;
  }

  .member-info h4 {
    font-size: 18px;
    font-weight: bold;
    margin: 10px 0 5px;
  }

  .member-info span {
    font-size: 14px;
    color: #6c757d;
  }

  .no-results {
    text-align: center;
    font-size: 18px;
    color: #6c757d;
  }

  .search-bar {
    margin-bottom: 20px;
  }
</style>

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
            <li><a href="services.php" style="font-size: 15px;">Services</a></li>
            <li><a href="departments.php" style="font-size: 15px;">Departments</a></li>
            <li><a href="doctor.php" class="active" style="font-size: 15px;">Doctors</a></li>
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
          <input class="form-control me-2" type="search" name="query" placeholder="Search doctors" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
  
      </div>
    </div>
  </header>

  <main class="main">

    <style>
      .team-member {
        background: #f8f9fa;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 15px;
      }
  
      .member-img img {
        width: 100%;
        height: auto;
      }
  
      .member-info {
        padding: 15px;
        text-align: center;
      }
  
      .member-info h4 {
        font-size: 18px;
        font-weight: bold;
        margin: 10px 0 5px;
      }
  
      .member-info span {
        font-size: 14px;
        color: #6c757d;
      }
  
      .no-results {
        text-align: center;
        font-size: 18px;
        color: #6c757d;
      }
  
      .search-bar {
        margin-bottom: 20px;
      }
  
      .loading {
        text-align: center;
        font-size: 18px;
        color: #007bff;
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <div class="container section-title">
      <h2 class="text-center mb-5">SEARCH DOCTORS RESULTS</h2>
  </div>
      <!-- Search Bar Filter -->
      <div class="search-bar d-flex">
        <input 
          type="search" 
          id="filterInput" 
          class="form-control me-2" 
          placeholder="Filter doctors by name or specialty"
          aria-label="Search filter"
        />
        <button id="searchButton" class="btn btn-outline-primary" type="button">
          Search
        </button>
      </div>
  
      <!-- Doctors List -->
      <div class="loading" id="loadingMessage">Loading doctors...</div>
      <div class="row" id="doctorList">
        <!-- Filtered results will be inserted here -->
      </div>
      <p class="no-results" id="noResultsMessage" style="display: none;">No doctors found. Please try another search term.</p>
    </div>
  
    <script>
      // Sample doctor data
      const doctors = [
      { name: "Walter White", specialty: "Chief Medical Officer", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Sarah Connor", specialty: "Cardiology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "John Doe", specialty: "Neurology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Jane Smith", specialty: "Pediatrics", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "James Miller", specialty: "Dermatology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Alice Brown", specialty: "Orthopedics", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Michael Johnson", specialty: "Oncology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Emily Davis", specialty: "General Medicine", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "David Wilson", specialty: "Ophthalmology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Lisa Moore", specialty: "ENT", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Robert Taylor", specialty: "Cardiothoracic Surgery", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Linda Anderson", specialty: "Psychiatry", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Thomas Martinez", specialty: "Gastroenterology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Nancy Thomas", specialty: "Rheumatology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Steven Jackson", specialty: "Palliative Care", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Dorothy White", specialty: "Nephrology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Brian Lee", specialty: "Infectious Diseases", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Monica Harris", specialty: "Pulmonology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Patrick Clark", specialty: "Endocrinology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Cynthia Walker", specialty: "Hematology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Charles Hall", specialty: "Urology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Katherine Allen", specialty: "Neurosurgery", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Henry Young", specialty: "Plastic Surgery", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Angela King", specialty: "Vascular Surgery", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "George Scott", specialty: "Trauma Surgery", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Olivia Wright", specialty: "Obstetrics & Gynecology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Frank Hill", specialty: "Pediatric Surgery", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Deborah Adams", specialty: "Hepatology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Samuel Nelson", specialty: "Sports Medicine", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Rebecca Carter", specialty: "Family Medicine", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Peter Mitchell", specialty: "Emergency Medicine", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Nancy Perez", specialty: "Internal Medicine", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Christopher Roberts", specialty: "Geriatrics", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Elizabeth Gonzalez", specialty: "Radiology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Andrew Lee", specialty: "General Surgery", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Megan Harris", specialty: "Anesthesiology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Mark Perez", specialty: "Pain Management", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Samantha Foster", specialty: "Addiction Medicine", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Steven Martinez", specialty: "Plastic Surgery", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Pamela Thompson", specialty: "Nephrology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Nancy Wilson", specialty: "Orthopedic Surgery", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Joseph Taylor", specialty: "Cardiothoracic Surgery", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "William Lewis", specialty: "Pediatric Medicine", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Ashley Harris", specialty: "Rheumatology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Paul Walker", specialty: "Infectious Diseases", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Victoria Adams", specialty: "Psychiatry", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Daniel Johnson", specialty: "Emergency Medicine", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Grace Nelson", specialty: "Pediatric Surgery", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Thomas Brown", specialty: "Surgical Oncology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Clara Johnson", specialty: "Palliative Care", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "David Allen", specialty: "Gastroenterology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Eva Martinez", specialty: "Rheumatology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Cynthia Clark", specialty: "Surgical Oncology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Steve King", specialty: "Sports Medicine", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Laura Scott", specialty: "Obstetrics & Gynecology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Fred Young", specialty: "Vascular Surgery", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Alice Harris", specialty: "Urology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Jack Robinson", specialty: "Plastic Surgery", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Sophia Green", specialty: "Anesthesiology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Benjamin Lee", specialty: "Surgical Oncology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Daniel Robinson", specialty: "Radiology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Grace Martinez", specialty: "General Medicine", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Paul Green", specialty: "Neurosurgery", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Olivia Clark", specialty: "Dermatology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Donald Lewis", specialty: "Internal Medicine", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Natalie Wilson", specialty: "Obstetrics & Gynecology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Peter Smith", specialty: "Cardiology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Joshua Anderson", specialty: "Trauma Surgery", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" },
  { name: "Harriet Taylor", specialty: "Nephrology", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRymF4Am_crLSm_gi5M_VyYyHDvJ-nhdpaVnw&s" }
      ];
  
      const doctorList = document.getElementById("doctorList");
      const filterInput = document.getElementById("filterInput");
      const searchButton = document.getElementById("searchButton");
      const loadingMessage = document.getElementById("loadingMessage");
      const noResultsMessage = document.getElementById("noResultsMessage");
  
      // Function to display doctors
      function displayDoctors(filteredDoctors) {
        doctorList.innerHTML = ""; // Clear the list
        loadingMessage.style.display = "none"; // Hide loading message
  
        if (filteredDoctors.length > 0) {
          filteredDoctors.forEach((doctor) => {
            const doctorCard = `
              <div class="col-lg-3 col-md-6 align-items-stretch">
                <div class="team-member">
                  <div class="member-img">
                    <img src="${doctor.image}" class="img-fluid" alt="${doctor.name}">
                  </div>
                  <div class="member-info">
                    <h4>${doctor.name}</h4>
                    <span>${doctor.specialty}</span>
                  </div>
                </div>
              </div>
            `;
            doctorList.innerHTML += doctorCard;
          });
          noResultsMessage.style.display = "none"; // Hide the "no results" message
        } else {
          noResultsMessage.style.display = "block"; // Show the "no results" message
        }
      }
  
      // Search button functionality
      searchButton.addEventListener("click", () => {
        const searchTerm = filterInput.value.toLowerCase();
        const filteredResults = doctors.filter((doctor) =>
          doctor.name.toLowerCase().includes(searchTerm) ||
          doctor.specialty.toLowerCase().includes(searchTerm)
        );
        displayDoctors(filteredResults);
      });
  
      // Live filter functionality (instant search as user types)
      filterInput.addEventListener("input", () => {
        const searchTerm = filterInput.value.toLowerCase();
        const filteredResults = doctors.filter((doctor) =>
          doctor.name.toLowerCase().includes(searchTerm) ||
          doctor.specialty.toLowerCase().includes(searchTerm)
        );
        displayDoctors(filteredResults);
      });
  
      // Initial loading and filtering based on URL query (if available)
      function initializePage() {
        const query = new URLSearchParams(window.location.search).get("query");
  
        let filteredDoctors = doctors;
        if (query) {
          filteredDoctors = doctors.filter((doctor) =>
            doctor.name.toLowerCase().includes(query.toLowerCase()) ||
            doctor.specialty.toLowerCase().includes(query.toLowerCase())
          );
        }
  
        displayDoctors(filteredDoctors);
      }
  
      // Call initialize function on page load
      initializePage();
    </script>
  
  
 

  </main>

  <footer id="footer" class="footer light-background" style="margin-top: 200px;">

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
          <li><a  href="#">About</a></li>
          <li><a  href="#">FAQ</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Services</a></li>
        </ul>
      </div>
    
      <div class="col-lg-2 col-md-3 footer-links">
        <h4>MIHMCI</h4>
        <ul>
          <li><a  href="#">Rates</a></li>
          <li><a  href="#">Packages</a></li>
          <li><a  href="#">Doctor's</a></li>
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