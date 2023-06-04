<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate and sanitize the data
    $email = trim($email);
    $password = trim($password);

    // Check the credentials against the database
    require_once 'dbcon.php';
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        // Successful login
        $row = mysqli_fetch_assoc($result);
        $_SESSION["email"] = $row["email"];
        $_SESSION["role"] = $row["role"];

        if ($row["role"] == "user") {
            // Redirect to index.php for users
            header("Location: index.php");
        } elseif ($row["role"] == "admin") {
            // Redirect to index.php for admin
            header("Location: admin.php");
        }
    } else {
        // Invalid credentials
        echo '<script>alert("Invalid email or password.");</script>';
    }

    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
        }

        .card {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?php include('header.php'); ?>

    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Login</h2>
                <form method="post" action="login.php">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <a href="register.php">Register</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>