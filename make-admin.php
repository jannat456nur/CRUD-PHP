<?php
require_once 'dbcon.php'; // Include your database connection file

session_start();

// Check if the user is logged in and has admin role
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

// Query to fetch all users from the database
$query = "SELECT * FROM users";
$result = mysqli_query($con, $query);

// Process the form submission if available
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the selected user's ID and new role from the form
    $userId = $_POST["user_id"];
    $newRole = $_POST["new_role"];

    // Update the user's role in the database
    $updateQuery = "UPDATE users SET role = '$newRole' WHERE id = $userId";
    mysqli_query($con, $updateQuery);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Make Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <?php include 'admin-header.php'; ?>
        <h1 class="mt-5">Make Admin</h1>

        <?php
        // Display the users and their roles in a table
        if (mysqli_num_rows($result) > 0) {
            echo '<table class="table table-striped">';
            echo '<thead><tr><th>ID</th><th>Email</th><th>Role</th><th>Make Admin</th></tr></thead>';
            echo '<tbody>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['role'] . '</td>';
                echo '<td>';
                echo '<form method="post" action="">';
                echo '<input type="hidden" name="user_id" value="' . $row['id'] . '">';
                echo '<select name="new_role" class="form-select">';
                echo '<option value="user">User</option>';
                echo '<option value="admin">Admin</option>';
                echo '</select>';
                echo '<button type="submit" class="btn btn-primary">Update</button>';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<p>No users found.</p>';
        }
        ?>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>