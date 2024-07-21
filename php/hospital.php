<!-- html code -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital</title>
  <link rel="icon" href="../Images/Logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="../CSS/Hospital.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Taviraj:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Taviraj:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300..900&family=Mukta+Vaani:wght@200;300;400;500;600;700;800&family=Rasa:ital,wght@0,300..700;1,300..700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
</head>

<body>
  <!-- header Design -->
  <header>
    <nav class="navbar navbar-expand-lg bg-body-none">
      <div class="container">
        <a class="navbar-brand mx-auto" href="#">
          <img src="../Images/Logo.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top" />
        </a>
        <h2 class="mt-3 fs-3 mx-3">DOCTOR SATHI</h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item me-3">
              <a
                class="nav-link active fw-medium fs-4"
                aria-current="page"
                href="index.php"
                >Home</a
              >
            </li>

            <li class="nav-item me-3">
              <a
                class="nav-link active fw-medium fs-4"
                aria-current="page"
                href="service.php"
                >Services</a
              >
            </li>

            <li class="nav-item me-3">
              <a
                class="nav-link active fw-medium fs-4"
                aria-current="page"
                href="about.php"
                >About</a
              >
            </li>
          </ul>
        </div>
        <!-- <a href="#" class="Login-button  fw-medium">Login</a> -->
        <img
          src="../Images/profile-user.png"
          alt="Logo"
          width="30"
          height="30"
          class="user d-inline-block me-4"
        />
      </div>
    </nav>

    
    <div class="Hospital container d-flex justify-content-center align-items-center rounded-5">
      <div class="text-center ">
        <h1 class="fw-semibold Visit-Hospital">Visit Hospital</h1>
      </div>
    </div>
  </header>

  <main>
    <div class="container mt-5">
      <!--First Row-->
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
            <img src="../Images/Hospital/teaching.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Teaching Hospital</h5>
              <p class="card-text fs-6 fw-medium">Maharajgunj, Kathmandu</p>
              <a href="#" class="btn brownbtn">Book Appointment</a>        
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
            <img src="../Images/Hospital/Bir Hospital.jpeg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Bir Hospital</h5>
              <p class="card-text fs-6 fw-medium">Kanti Path, Kathmandu</p>
              <a href="#" class="btn brownbtn">Book Appointment</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
            <img src="../Images/Hospital/kantijpg.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Kanti Children’s Hospital</h5>
              <p class="card-text fs-6 fw-medium">Maharajgunj, Kathmandu</p>
              <a href="#" class="btn brownbtn">Book Appointment</a>
            </div>
          </div>
        </div>
      </div>
      <!--Second Row-->
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
            <img src="../Images/Hospital/grande.jpeg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Grande Hospital</h5>
              <p class="card-text fs-6 fw-medium">Tokha Rd, Kathmandu</p>
              <a href="#" class="btn brownbtn">Book Appointment</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
            <img src="../Images/Hospital/Norvic.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Norvic International Hospital</h5>
              <p class="card-text fs-6 fw-medium">Thapathali, Kathmandu</p>
              <a href="#" class="btn brownbtn">Book Appointment</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
            <img src="../Images/Hospital/Vayodha Hospital.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Vayodha Hospital</h5>
              <p class="card-text fs-6 fw-medium">Balkhu, Kathmandu</p>
              <a href="#" class="btn brownbtn">Book Appointment</a>
            </div>
          </div>
        </div>
      </div>
      <!--Third Row-->
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
            <img src="../Images/Hospital/nepal-medicit.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Nepal Mediciti</h5>
              <p class="card-text fs-6 fw-medium">Bhaisepati, Lalitpur</p>
              <a href="#" class="btn brownbtn">Book Appointment</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
            <img src="../Images/Hospital/teku.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Teku Hospital</h5>
              <p class="card-text fs-6 fw-medium">Teku, Kathmandu</p>
              <a href="#" class="btn brownbtn"">Book Appointment</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
            <img src="../Images/Hospital/Kantipur.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title"> Kantipur Hospital</h5>
              <p class="card-text fs-6 fw-medium">Shriganesh Marg, Tripureshwor</p>
              <a href="#" class="btn brownbtn" >Book Appointment</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Select Time</h2>
      <div id="timeButtons"></div>
    </div>
  </div>
  <!--Apply design for user and doctor-->

  <div class="upperFooter container-fluid mt-5 mb-5">
    <div class="row justify-content-evenly">
      <div class="col-md-5 col-lg-4 d-flex flex-column justify-content-center align-items-center mt-5">
        <h2 class="text-center text-white fw-bold mb-4">Become Our Health Partner</h2>
        <button class="btn  btn-lg fw-semibold" id="apply">Apply Now</button>
      </div>
      <div class="col-md-5 col-lg-4 d-flex flex-column justify-content-center align-items-center mt-5">
        <h2 class="text-center text-white fw-bold mb-4">Become Our Doctor</h2>
        <button class="btn btn-lg fw-semibold" id="apply">Apply Now</button>
      </div>
    </div>
  </div>

  <!--Footer Design-->
  <footer>
    <div
      class="social-connect  text-center rounded-top-3"
    >
      <div class="container">
        <div class="row">
          <div class="d-flex justify-content-between">
            <p class="fs-6 py-2 mt-2">
              Get connected with us on Social networks:
            </p>
            <div class="d-flex justify-content-end align-items-center">
              <a href="#">
              <img
                src="../Images/facebook.png"
                alt="Facebook Icon"
                width="32"
                height="32"
                class="me-2 rounded-circle"
              />
            </a>
              <a href="#">
              <img
                src="../Images/Linkedin.png"
                alt="Linkedin Icon"
                width="32"
                height="32"
                class="me-2 rounded-circle"
              />
            </a>
              <a href="#">
              <img
                src="../Images/instagram.png"
                alt="Instagram Icon"
                width="32"
                height="32"
                class="me-2 rounded-circle"
              />
            </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class=" pt-5 pb-4">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4">
            <img
              src="../Images/Logo.png"
              alt="Logo"
              width="100"
              height="100"
              class="align-middle mb-2"
            />
            <span class="fs-5 fw-bold mx-3">DOCTOR SATHI</span>
          </div>
          <div class="col-12 col-md-4 text-center">
            <h5 class="mb-3">Our Services</h5>
            <ul class="list-unstyled py-1">
              <li>
                <a href="medicine.php" class="text-decoration-none text-white"
                  >Medicine</a
                >
              </li>
              <li>
                <a href="appointment.php" class="text-decoration-none text-white"
                  >Online Appoinment</a
                >
              </li>
              <li>
                <a href="hospital.php" class="text-decoration-none text-white"
                  >Physical Appoinment</a
                >
              </li>
              <li>
                <a href="history.php" class="text-decoration-none text-white"
                  >Medical Records</a
                >
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-4 text-end">
            <h4 class="mb-3">Contact Us</h4>
            <p class="fs-6">
              <img
                src="../Images/mail.png"
                alt="Email Icon"
                width="16"
                height="16"
                class="me-2"
              />
              Email: info@doctorsathi.com
            </p>
            <p class="fs-6">
              <img
                src="../Images/phone.png"
                alt="Phone Icon"
                width="20"
                height="20"
                class=""
              />
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

<!-- js code -->
  <script>
    let timeButtons = document.getElementById("timeButtons");

    function onCardClick(card) {
      displayTimeSelectionInterface(card);
    }

    function displayTimeSelectionInterface(card) {
      let availableTimes = [
        "10:00:00",
        "11:00:00",
        "12:00:00",
        "1:00:00",
        "2:00:00",
      ];
      let modal = document.getElementById("myModal");
      let span = document.getElementsByClassName("close")[0];
      timeButtons.innerHTML = "";

      availableTimes.forEach((time) => {
        let timeButton = document.createElement("button");
        timeButton.setAttribute("id", "timeBtn");
        timeButton.innerText = time;
        timeButton.onclick = async function () {
          modal.style.display = "none";
          if (localStorage.getItem("Name")) {
            var username = localStorage.getItem("Name");
            var doctorName = card.querySelector(".card-title").innerText;
            var selectedTime = timeButton.innerText;

            const doctorAppointment = {
              username: username,
              doctorName: doctorName,
              time: selectedTime,
            };

            try {
              const baseUrl = "https://localhost:3308/DoctorAppointment";
              const response = await fetch(baseUrl, {
                method: "POST",
                headers: {
                  "Content-Type": "application/json",
                },
                body: JSON.stringify(doctorAppointment),
              });

              if (response.ok) {
                alert("Successfully booked.");
              }
            } catch (error) {
              console.log(error);
            }
          }
          onConfirmTimeSelection(timeButton);
        };
        timeButtons.appendChild(timeButton);
      });

      modal.style.display = "block";

      span.onclick = function () {
        modal.style.display = "none";
      };

      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };
    }

    let cards = document.querySelectorAll(".card");

    cards.forEach((card) => {
      card.addEventListener("click", function () {
        onCardClick(this);
      });
    });

    function onConfirmTimeSelection(selectedTimeButton) {
      const selectedTime = selectedTimeButton.innerText; // Extract text content
      displayConfirmationMessage(selectedTime);
    }

    function displayConfirmationMessage(selectedTime) {
      alert("Booking confirmed for " + selectedTime);
    }
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>
