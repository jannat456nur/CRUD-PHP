<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">E-MART</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="make-admin.php">Make admin</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php
                if (isset($_SESSION["email"])) {
                    // User is logged in
                    echo '<li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                          </li>';
                } else {
                    // User is not logged in
                    echo '<li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="register.php">Register</a>
                          </li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>