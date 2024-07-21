<?php
session_start();
?>
<!-- html code -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="icon" href="../Images/Logo.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="../CSS/index.css" />
  <link href="https://fonts.googleapis.com/css2?family=Taviraj:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300..900&family=Mukta+Vaani:wght@200;300;400;500;600;700;800&family=Rasa:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet" />
</head>
<body>
 
  <!-- Header Design -->

  <header>
    <nav class="navbar navbar-expand-lg bg-body-none">
      <div class="container">
        <a class="navbar-brand mx-auto" href="../HTML/index.html">
          <img src="../Images/Logo.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top mx-3" />
        </a>
        <h2 id="color" class="fs-3 mx-3">DOCTOR SATHI</h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item me-3">
              <a class="nav-link active fw-medium fs-4" id="color" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link active fw-medium fs-4" id="color" aria-current="page" href="service.php">Services</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link active fw-medium fs-4" id="color" aria-current="page" href="about.php">About</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link active fw-medium fs-4" id="color" aria-current="page" href="login.php">Login</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link active fw-medium fs-4" id="color" aria-current="page" href="signin_up.php">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="part-section">
      <div class="container">
        <div class="row g-5">
          <div class="d-flex align-items-center justify-content-left">
            <div class="col-12 col-lg-6">
              <h1 class="ms-5 mt-5 lh-sm Welcome-Heading">Welcome to <br/>DOCTOR SATHI</h1>
              <p class="p px-5 fw-bold">Find your doctor and make an <br />appointment</p>
              <a href="appointment.php">
                <button type="submit" class="bttn btn-dark p-1 w-75 mt-3 ms-5 rounded-5 shadow">
                  Book an Appointment
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>

  <main>
    <!-- Our Service -->
    <div class="Our Service pt-5" id="Service">
      <div class="Our-service container">
        <h2 class=" fw-bold text-center pb-4 lh-base our-Service">Our Services</h2>
      </div>

      <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col-md-3">
            <div class="card shadow-sm bg-light rounded-3 border-0 hover-effect">
              <img src="../Images/Appoinment doctor.jpg" class="card-img-top" alt="Smiley doctor" />
              <div class="card-body">
                <h4 class="card-title fs-5">Book an appointment with a doctor.</h4>
                <a href="appointment.php" class="stretched-link text-decoration-none">
                  <button type="button" class="btn btn-dark rounded-pill">Consult Now</button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="card shadow-sm bg-light rounded-3 border-0 hover-effect">
              <img src="../Images/Delivery.jpg" class="card-img-top" alt="Delivery" />
              <div class="card-body">
                <h4 class="card-title fs-5">Order your medicines online.</h4>
                <a href="medicine.php" class="stretched-link text-decoration-none">
                  <button type="button" class="btn btn-dark rounded-pill">Order Now!</button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="card shadow-sm bg-light rounded-3 border-0 hover-effect">
              <img src="../Images/physicalAppoinment.jpg" class="card-img-top" alt="Physical Appointment" />
              <div class="card-body">
                <h4 class="card-title fs-5">Book a physical appointment.</h4>
                <a href="hospital.php" class="stretched-link text-decoration-none">
                  <button type="button" class="btn btn-dark rounded-pill">Book Now!</button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="card shadow-sm bg-light rounded-3 border-0 hover-effect">
              <img src="../Images/track.jpg" class="card-img-top" alt="Medical History" />
              <div class="card-body">
                <h4 class="card-title fs-5">Trace your medical history</h4>
                <a href="history.php" class="stretched-link text-decoration-none">
                  <button type="button" class="btn btn-dark rounded-pill">View medical history</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- BMI Section -->
    <div class="container my-5">
      <div class="row g-5 d-flex align-items-center">
        <div class="col-12 col-lg-5 py-5">
          <img src="../Images/BMI.png" alt="BMI Indicator" class="img-fluid ms-auto d-block m-4" />
        </div>
        <div class="col-12 col-lg-7" id="text">
          <h4 class="fw-bold fs-4 mb-3 BMI">Calculate Your BMI for a Healthier<br />You</h4>
          <p class="BMI-P fs-5 fw-medium">
            Track your progress towards a healthier lifestyle.<br /><br />
            BMI a screening tool used to estimate body fat based on your height and weight.<br /><br />
            BMI can be a quick and easy way to get a general idea of your weight-to-height ratio. It can also be used to track changes over time and identify potential health risks.
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-left">
            <a href="bmi.php">
              <button type="button" class="btn rounded-5 bmi-btn my-3" id="btnColor">
                Calculate BMI
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>

    <footer class=" py-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4">
            <img src="../Images/Logo.png" alt="Logo" width="100" height="100" />
            <span class="fs-4 ms-3 fw-bold d-block text-white">DOCTOR SATHI</span>
          </div>
          <div class="col-12 col-md-4 text-center">
            <h5 class="mb-4 text-white">Our Services</h5>
            <ul class="list-unstyled">
              <li><a href="medicine.php" class="text-decoration-none text-white">Medicine</a></li>
              <li><a href="appointment.php" class="text-decoration-none text-white">Online Appointment</a></li>
              <li><a href="hospital.php" class="text-decoration-none text-white">Physical Appointment</a></li>
              <li><a href="history.php" class="text-decoration-none text-white">Medical Records</a></li>
            </ul>
          </div>
          <div class="col-12 col-md-4 text-end">
            <h4 class="mb-4 text-white">Contact Us</h4>
            <p class="fs-6 mb-3">
              <img src="../Images/mail.png" alt="Email Icon" width="20" height="20" class="me-2" />
              <a href="mailto:info@vare.com" class="text-decoration-none text-white">info@doctorsathi.com</a>
            </p>
            <p class="fs-6">
              <img src="../Images/phone.png" alt="Phone Icon" width="20" height="20" class="me-2" />
              <a href="tel:+0197667676" class="text-decoration-none text-white">+01 97667676</a>
            </p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright text-white text-center py-2">
      &copy; 2024 DOCTOR SATHI
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script>
    function toggleDarkMode() {
      document.body.classList.toggle('dark-mode');
    }
  </script>
  <script type="module" src="/Js/index.js"></script>
</body>
</html>




<!-- js code -->
<script>
    // src/app.js

import { fetchUsers } from './api';
import { getUsername } from './api'; // Import getUsername function

const baseUrl = "https://localhost:3308/Users/getUsername";

async function getUsersAndDisplay() {
    try {
        const users = await fetchUsers();
        console.log('Users:', users);
        // Display users on the UI or process data further
    } catch (error) {
        console.error('Failed to fetch users:', error);
        // Handle error (e.g., display error message)
    }
}

async function updateUserDisplay() {
    try {
        const username = await getUsername(baseUrl); // Await for username
        const login = document.getElementById("login");
        const userLogo = document.getElementById("userLogo");

        if (username) {
            localStorage.setItem("username", username);
            login.style.display = "none";
            userLogo.innerHTML = username;
            userLogo.style.display = "block";
        } else {
            login.style.display = "block";
            userLogo.style.display = "none";
        }
    } catch (error) {
        console.error("Error updating user display:", error);
    }
}

updateUserDisplay();

document.getElementById("logout").addEventListener("click", function () {
    localStorage.removeItem("username");
    updateUserDisplay();
});

</script>


<!-- php code -->
<?php

include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sanitize input to prevent SQL injection (you should use prepared statements instead)
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($qry);

    if ($row) {
        $role = $row['role']; // Assuming 'role' is the column in your database for user roles
        if ($role == 'Customer') {
            $_SESSION["username"] = $username;
            $_SESSION["customer_id"] = $row['userid'];
            echo "<script>window.location.href = '../user/index.php';</script>";
            exit();
        }
    } else {
        echo '<script>
        alert("Login failed. Please check your credentials.");
        window.location.href = "signin_up.php";
        </script>';
    }
}
?>
