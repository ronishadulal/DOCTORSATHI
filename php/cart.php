<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
  <link rel="icon" href="/Images/Logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="../CSS/cart.css">
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
          
                <li class="nav-item">
                <a class="nav-link active fw-medium" aria-current="page" href="cart.php">
                    <img src="/Images/cart.png" alt="Cart Icon" width="25" height="25" class="me-2">Cart
                </a>
                </li>
                <li class="nav-item">
              <a class="nav-link active fw-medium" aria-current="page" href="index.php">Home</a>
             </li>

                <li class="nav-item">
              <a class="nav-link active  fw-medium" aria-current="page" href="service.php">Services</a>
                </li>

                <li class="nav-item">
              <a class="nav-link active  fw-medium" aria-current="page" href="about.php">About</a>
                </li>
             </ul>
        </div>
        <img src="/Images/profile-user.png" alt="Logo" width="25" height="25" class="user d-inline-block">
      </div>
    </nav>
  </header>
  <main>
        <div class="container">
            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-6">
                    <div class="card">
                        <img src="/Images/cart.png" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Product Name</h5>
                            <p class="card-text">Product description goes here. This is a brief description of the product.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </main>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>
</html>
