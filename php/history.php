<!-- html code -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Medical History</title>
    <link rel="icon" href="../Images/Logo.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../CSS/History.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap"
      rel="stylesheet"
    />
   
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-none">
            <div class="container">
                <a class="navbar-brand mx-auto" href="#">
                    <img src="../Images/Logo.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top" />
                </a>
                <h2 class="mt-3 fs-3 mx-3">DOCTOR SATHI</h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw-medium" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active fw-medium" aria-current="page" href="service.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active fw-medium" aria-current="page" href="about.php">About</a>
                        </li>
                    </ul>
                </div>
                <img src="../Images/profile-user.png" alt="Profile" width="25" height="25" class="user d-inline-block" />
            </div>
        </nav>
        <div class="About mb-5 container-fluid d-flex justify-content-center align-items-center">
            <div class="Hcolor text-center">
                <h1 class="About-Us py-5 fw-semibold">Medical History</h1>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Patient History Card 1 -->
            <div class="col w-50 mb-5">
                <div class="card medical-history-card">
                    <div class="card-body">
                        <h5 class="card-title">Date: 2024/02/28</h5>
                        <p class="card-text">Reason for Visit: Fever</p>
                        <!-- <p class="card-text">Notes: Patient had a high fever and was given medication.</p> -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="examined-by">
                                <h6>Examined by:</h6>
                                <a href="#" class="doctor-details">
                                    <div class="doctor-image">
                                        <img src="../Images/doctor.png" alt="Doctor" class="img-fluid" />
                                    </div>
                                    <div class="doctor-name">Dr. Dipesh Mahat</div>
                                </a>
                            </div>
                            <button class="btn brownbtn" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="showDetails('2024/02/28', 'Fever', 'Patient had a high fever and was given medication.')">View More</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Patient History Card 2 -->
            <div class="col w-50 mb-5">
                <div class="card medical-history-card">
                    <div class="card-body">
                        <h5 class="card-title">Date: 2024/03/15</h5>
                        <p class="card-text">Reason for Visit: Cough</p>
                        <!-- <p class="card-text">Notes: Patient experienced persistent cough. Prescribed cough syrup.</p> -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="examined-by">
                                <h6>Examined by:</h6>
                                <a href="#" class="doctor-details">
                                    <div class="doctor-image">
                                        <img src="../Images/doctor.png" alt="Doctor" class="img-fluid" />
                                    </div>
                                    <div class="doctor-name">Dr. Sita Rana</div>
                                </a>
                            </div>
                            <button class="btn brownbtn" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="showDetails('2024/03/15', 'Cough', 'Patient experienced persistent cough. Prescribed cough syrup.')">View More</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Patient History Card 3 -->
            <div class="col w-50 mb-5">
                <div class="card medical-history-card">
                    <div class="card-body">
                        <h5 class="card-title">Date: 2024/04/10</h5>
                        <p class="card-text">Reason for Visit: Headache</p>
                        <!-- <p class="card-text">Notes: Patient reported severe headaches. Recommended rest and pain relievers.</p> -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="examined-by">
                                <h6>Examined by:</h6>
                                <a href="#" class="doctor-details">
                                    <div class="doctor-image">
                                        <img src="../Images/doctor.png" alt="Doctor" class="img-fluid" />
                                    </div>
                                    <div class="doctor-name">Dr. Rajesh Kumar</div>
                                </a>
                            </div>
                            <button class="btn brownbtn" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="showDetails('2024/04/10', 'Headache', 'Patient reported severe headaches. Recommended rest and pain relievers.')">View More</button>
                        </div>
                    </div>
                </div>
            </div>

        
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Medical History Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="modal-date"></p>
                    <p id="modal-reason"></p>
                    <p id="modal-notes"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="social-connect text-center rounded-top-3">
            <div class="container">
                <div class="row">
                    <div class="d-flex justify-content-between">
                        <p class="fs-6 py-2 mt-2">Get connected with us on Social networks:</p>
                        <div class="d-flex justify-content-end align-items-center">
                            <img src="../Images/facebook.png" alt="Facebook Icon" width="32" height="32" class="me-2 rounded-circle" />
                            <img src="../Images/Linkedin.png" alt="Linkedin Icon" width="32" height="32" class="me-2 rounded-circle" />
                            <img src="../Images/instagram.png" alt="Instagram Icon" width="32" height="32" class="me-2 rounded-circle" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="pt-5 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <img src="../Images/Logo.png" alt="Logo" width="100" height="100" class="align-middle mb-2" />
                        <span class="fs-5 fw-bold">Vcare</span>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <h5 class="mb-3">Our Services</h5>
                        <ul class="list-unstyled py-1">
                            <li><a href="../HTML/Medicine.html" class="text-decoration-none text-white">Medicine</a></li>
                            <li><a href="../HTML/appointment.html" class="text-decoration-none text-white">Online Appointment</a></li>
                            <li><a href="../HTML/Hospital.html" class="text-decoration-none text-white">Physical Appointment</a></li>
                            <li><a href="../HTML/History.html" class="text-decoration-none text-white">Medical Records</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4 text-end">
                        <h4 class="mb-3">Contact Us</h4>
                        <p class="fs-6">
                            <img src="../Images/mail.png" alt="Email Icon" width="16" height="16" class="me-2" />
                            Email: info@doctorsathi.com
                        </p>
                        <p class="fs-6">
                            <img src="../Images/phone.png" alt="Phone Icon" width="20" height="20" class="" />
                            Phone: +01 97667676
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copyright text-center py-2">
            &copy; 2024 DOCTOR SATHI
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
   
   <!-- php code -->
   
   <script>
      function showDetails(date, reason, notes) {
        document.getElementById('modal-date').innerText = 'Date: ' + date;
        document.getElementById('modal-reason').innerText = 'Reason for Visit: ' + reason;
        document.getElementById('modal-notes').innerText = 'Notes: ' + notes;
      }
    </script>
</body>
</html>
