<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="icon" href="../Images/Logo.png">
    <link rel="stylesheet" href="../CSS/signUp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body class="main_">
    <nav class="navbar navbar-expand-lg bg-body-none">
        <div class="container">
            <a class="navbar-brand mx-auto" href="/HTML/index.html">
                <img src="../Images/Logo.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top" />
            </a>
            <h2 class="mt-3 fs-3 mx-3">DOCTOR SATHI</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3">
                        <a class="nav-link active fw-medium fs-4 text-white" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active fw-medium fs-4 text-white" aria-current="page" href="service.php">Services</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active fw-medium fs-4 text-white" aria-current="page" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <form class="rounded-3 mx-auto px-5 py-5 w-75 signupForm" id="signupForm">
                    <h2 class="text-center pb-4">Sign Up</h2>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control rounded-pill px-4" id="username" name="username" placeholder="Full Name" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="tel" class="form-control rounded-pill px-4" id="number" name="number" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="email" class="form-control rounded-pill px-4" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" class="form-control rounded-pill px-4" id="password" name="password" placeholder="Password" required autocomplete="new-password">
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" class="form-control rounded-pill px-4" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required autocomplete="new-password">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-lg rounded-pill" id="signUpBtn">Sign Up</button>
                    </div>
                </form>
                <p class="text-center mt-4">Already have an account? <a href="login.php">Login</a></p>
            </div>
            <div class="col-md-6">
                <img src="../Images/Medicine.png" class="Logimg img-fluid rounded-4" alt="Medical Image" />
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        document.getElementById("signUpBtn").addEventListener("click", async function (event) {
            event.preventDefault();
            var fullName = document.getElementById("username").value;
            var phoneNumber = document.getElementById("number").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm-password").value;

            const signUp = {
                fullName: fullName,
                phoneNumber: phoneNumber,
                email: email,
                password: password,
                confirmPassword: confirmPassword,
            };

            try {
                const response = await fetch("signup_handler.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify(signUp),
                });

                if (response.ok) {
                    const data = await response.json();
                    alert(data.message);
                    window.location.href = "login.php";
                } else {
                    const data = await response.json();
                    alert("Signup failed: " + (data.errors ? data.errors.join(", ") : data.error));
                }
            } catch (error) {
                console.log("Error during signup:", error);
            }
        });
    </script>
</body>
</html>
