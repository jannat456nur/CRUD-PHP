<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <!-- Font awesome kit -->

    <script
      src="https://kit.fontawesome.com/d5d25df65b.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="details.css">
 <!-- bootstrap js -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>


<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-black text-white">
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-white fw-bold" href="#">E-MART</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="products.php">Products</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php if (isset($_SESSION['email'])) {
                    // User is logged in
                    echo '<li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="logout.php">Logout</a>
                          </li>';
                } else {
                    // User is not logged in
                    echo '<li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="login.php">Login</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="register.php">Register</a>
                          </li>';
                } ?>
            </ul>
        </div>
  
</nav>
 <div class="row details-div text-center">
    <div class="col-md-12">
      <h2>Shirts</h2>
      <p>Price: $19.99</p>
      <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla mattis dolor, vitae consequat velit lacinia ac. Sed nec dolor leo. Sed venenatis vel ex a malesuada.</p>
      <button class="details-button">Add to Cart</button>
    </div>
  </div>
  </div>

 



 <!-- start of footer -->
<footer class="footer bg-black text-light ">
  <div class="container ">
    <div class="row ">
      <div class="col-md-3 mt-5">
        <h5>About Shop</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Read More</p>
        <p>E. hello@uxper.co</p>
        <p>T. (00) 342 489 33</p>
      </div>
      <div class="col-md-3 mt-5">
        <h5>Company</h5>
        <p>About Us</p>
        <p>Careers</p>
        <p>Store Locator</p>
        <p>Contact Us</p>
      </div>
      <div class="col-md-3 mt-5">
        <h5>Customer Care</h5>
        <p>Size Guide</p>
        <p>Help & FAQs</p>
        <p>Return My Order</p>
        <p>Refer A Friend</p>
      </div>
      <div class="col-md-3 mt-5">
        <h5>Quick Links</h5>
        <p>Duties & Taxes</p>
        <p>Duties & Taxes</p>
        <p>Privacy Policy</p>
        <p>Shipping Info</p>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-6">
        <p>&copy; 2023 Your Company. All rights reserved.</p>
      </div>
      <div class="col-md-6">
        <p class="text-md-right">
          <a href="#">Terms of Use</a> |
          <a href="#">Privacy Policy</a> |
          <a href="#">Contact</a>
        </p>
      </div>
    </div>
  </div>
</footer>


<!-- end of footer -->
</body>
</html>