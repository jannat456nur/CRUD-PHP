<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home Page</title>
      <!-- Font awesome kit -->

    <script
      src="https://kit.fontawesome.com/d5d25df65b.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="user-home.css">
 <!-- bootstrap js -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="container mt-2">
    <!-- start of banner -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/banner-1.jpg" class="d-block w-100 "    alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/banner-4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/banner-3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
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

<!-- start of banner 2 -->

  <div class="row mt-5">
  
    <div class="col-5 ">
        <img class="" style="width:500px" src="./img/banner-fashion-01-1.jpg"/>
    </div>
    <div class="col-7 ">
        <p class="banner-title1">Sale Event</p>
        <p class="banner-title2">Summer Shirt</p>
        <p class="banner-title3">Limited Offer - $20</p>
        <p class="banner-title4">until 12/7/23 .Use code FESTIVE at checkout</p>
        <button class="banner-btn">Shop Now</button>
    </div>
  </div>


<!-- end of banner 2 -->


<!-- starts of review section  -->

<!-- <div id="review-slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#review-slider" data-slide-to="0" class="active"></li>
      <li data-target="#review-slider" data-slide-to="1"></li>
      <li data-target="#review-slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <p>Great product! I love it.</p>
        <p>- John Doe</p>
      </div>
      <div class="carousel-item">
        <p>Highly recommended. Excellent quality.</p>
        <p>- Jane Smith</p>
      </div>
      <div class="carousel-item">
        <p>Amazing customer service. Prompt response and helpful staff.</p>
        <p>- Sarah Johnson</p>
      </div>
    </div>
    <a class="carousel-control-prev" href="#review-slider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#review-slider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> -->


<!-- end of review section  -->

<!-- stats of blog -->

<p class="fw-bold fs-2 text-center mt-5 mb-0">From The Blog</p>
<div class="card-group mt-5">
  <div class="card m-5 border-0">
    <img src="./img/blog-1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title fs-6">TRENDS</h5>
      <h5 class="card-title fs-4">What I Learned By Embracing French Guy Style</h5>
      <p class="card-text">Have you ever been in a fashion rut? The kind where you look into your....</p>
  <p class="read-more">Read More</p>
 
    </div>
  </div>
  <div class="card m-5 border-0">
    <img src="./img/blog-2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">TRENDS</h5>
         <h5 class="card-title fs-4">Street Style in 2017 vs. 2022</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="read-more">Read More</p>
    </div>
  </div>
<div class="card m-5 border-0">
    <img src="./img/blog-1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title fs-6">TRENDS</h5>
      <h5 class="card-title fs-4">What I Learned By Embracing French Guy Style</h5>
      <p class="card-text">Have you ever been in a fashion rut? The kind where you look into your....</p>
  <p class="read-more">Read More</p>
 
    </div>
  </div>
</div>

<!-- end of blog -->

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

<!-- start of newslatter -->
<div class="d-flex container">



    
    <div class="col-6 p-5">
        <p class=" fw-bold fs-2 mt-5">Sign up and get up to <span class="text-danger"> 20%</span>  off your</p>
        <p class=" fw-bold fs-2">first purchase</p>
        <p class="text-secondary">Receive offers, product alerts, styling inspiration and more. By signing up, you agree to our Privacy Policy.</p>
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