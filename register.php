<?php
require_once 'dbcon.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    // Validate and sanitize the data
    $email = trim($email);
    $password = trim($password);
    $confirmPassword = trim($confirmPassword);

    // Check if the email already exists in the database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        // Email already exists
        echo "Email already exists.";
    } else {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["email"] = $row["email"];
        $_SESSION["role"] = $row["role"];

        if ($row["role"] == "user") {
            // Redirect to home.php for users
            header("Location: user-home.php");
        } elseif ($row["role"] == "admin") {
            // Redirect to index.php for admin
            header("Location: admin.php");
        }
    }

    mysqli_close($con);
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
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
    <div class="container mt-5">

        <div class="card mt-5">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Register</h2>
                <form method="post" action="register.php">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password:</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control"
                            required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    <a href="login.php">Login</a>
                </form>
            </div>
        </div>
    </div>
    <script>
        // check password and confirm password are the same
        // if not, display an alert
        document.querySelector('form').addEventListener('submit', (e) => {
            const password = document.querySelector('#password').value;
            const confirmPassword = document.querySelector('#confirm_password').value;

            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Passwords do not match.');
            }
        });

    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>