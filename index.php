<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Home Page</title>
  <!-- Font awesome kit -->

  <script src="https://kit.fontawesome.com/d5d25df65b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="user-home.css">
  <!-- bootstrap js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</head>

<body>
  <?php include 'header.php'; ?>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/banner-1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Welcome to E-Commerce</h2>
          <p>Discover the latest trends and shop your favorite products.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/banner-5.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Shop Now</h2>
          <p>Explore our wide range of products and find the perfect one for you.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/banner-2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Special Offers</h2>
          <p>Don't miss out on our exclusive deals and discounts.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- end of banner  -->
  <div class="container ">
    <!-- start of banner -->


    <!-- start of banner 2 -->

    <div class="row mt-5">

      <div class="col-5 ">
        <img class="" style="width:500px" src="./img/banner-fashion-01-1.jpg" />
      </div>
      <div class="col-7 ">
        <p class="banner-title1">Sale Event</p>
        <p class="banner-title2">Summer Shirt</p>
        <p class="banner-title3">Limited Offer - $20</p>
        <button class="banner-btn">Shop Now</button>
      </div>
    </div>
    <!-- start of minifooter of blog -->


    <p class="fw-bold fs-6 text-center"><i class="fa-brands fa-instagram"></i>Follow Us @Uxper</p>

    <!-- end of minifooter of blog -->

  </div>

  <!-- start of onother banner-3 -->
  <div class="card-group ">
    <div class="card m-2">
      <img src="./img/1.jpg" class="card-img-top" alt="...">

    </div>
    <div class="card m-2">
      <img src="./img/2.jpg" class="card-img-top" alt="...">

    </div>
    <div class="card m-2">
      <img src="./img/3.jpg" class="card-img-top" alt="...">

    </div>
    <div class="card m-2">
      <img src="./img/4.jpg" class="card-img-top" alt="...">

    </div>
    <div class="card m-2">
      <img src="./img/5.jpg" class="card-img-top" alt="...">

    </div>
  </div>

  <!--  start of onother banner-3  -->
  <!-- Start of feedback section -->
  <div class="container mt-5">
    <p class="fw-bold fs-2 text-center">Customer Feedback</p>
    <div class="card-group mt-5">
      <?php
      require_once('dbcon.php'); // Include the dbcon.php file
      
      // Retrieve the last 3 feedbacks from the database
      $query = "SELECT * FROM feedbacks ORDER BY id DESC LIMIT 3";
      $result = mysqli_query($con, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $name = $row['name'];
          $feedback = $row['feedback'];

          echo '<div class="card m-3 p-3 border rounded">';
          echo '<div class="card-body">';
          echo '<h5 class="card-title">' . $name . '</h5>';
          echo '<p class="card-text">"' . $feedback . '"</p>';
          echo '</div>';
          echo '</div>';
        }
      } else {
        echo '<p>No feedbacks available.</p>';
      }
      ?>
    </div>
  </div>

  <!-- End of feedback section -->

  <!-- start of newslatter -->
  <div class="d-flex container">
    <div class="col-6 p-5">
      <p class=" fw-bold fs-2 mt-5">Sign up and get up to <span class="text-danger"> 20%</span> off your</p>
      <p class=" fw-bold fs-2">first purchase</p>
      <p class="text-secondary">Receive offers, product alerts, styling inspiration and more. By signing up, you agree
        to our Privacy Policy.</p>
    </div>
    <div class="col-6  textfield-div p-5">
      <div class="form-group">
        <div class="d-flex align-items-center">
          <input type="email" class="form-control form-control-underline  " placeholder="Enter your email">
          <span class="text-muted ml-2 text">Subscribe</span>
        </div>
      </div>
    </div>
  </div>



  <!-- end of newslatter -->

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

  </div>
</body>

</html>