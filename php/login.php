<?php
session_start();
?>
<!-- html code -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/login.css">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
</head>
<body class="mainn">
    <nav class="navbar navbar-expand-lg bg-body-none">
        <div class="container">
            <a class="navbar-brand mx-auto" href="index.php">
                <img src="../Images/Logo.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top" />
            </a>
            <h2 class="mt-3 text-white fs-3 mx-3">DOCTOR SATHI</h2>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3">
                        <a class="nav-link active text-white fw-medium fs-4" aria-current="page" href="index.php">Home</a>
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
        <div class="row">
            <div class="col-md-6 align-self-center">
                <img src="../Images/Medicine.png" class="Logimg img-fluid rounded-4" alt="Medical Image">
            </div>
            <div class="col-md-5 align-self-center">
                <form method="POST" action="" class="login-form">
                    <h2 class="text-center mb-4 text-white">Login</h2>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control rounded-4" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control rounded-4" id="password" name="password" placeholder="Password" required autocomplete="current-password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn bg-light rounded-pill px-5">Login</button>
                    </div>
                    <p class="text-center mt-3 text-white">
                        Don't have an account? <a href="signin_up.php" class="text-white">Sign Up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


<!-- php code -->
<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Simple SQL query (not secure, use prepared statements in production)
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($qry);

    if ($row) {
        // Set session variables
        $_SESSION["username"] = $row['username'];
        $_SESSION["email"] = $row['email'];

        // Redirect to index.php
        echo '<script>
            alert("Login successful.");
            window.location.href = "index.php";
        </script>';
    } else {
        // Invalid credentials
        echo '<script>
            alert("Invalid email or password. Please try again.");
            window.location.href = "login.php";
        </script>';
    }

    // Close connection
    $conn->close();
}
?>