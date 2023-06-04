<?php
if (session_status() == PHP_SESSION_NONE) {
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
  </div>