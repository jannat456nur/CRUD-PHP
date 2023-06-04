<!-- Start of feedback form -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="user-home.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <?php include('message.php'); ?>

    <div class="container">
        <p class="fw-bold fs-2 text-center">Leave Feedback</p>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control w-100" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="feedback" class="form-label">Feedback</label>
                        <textarea class="form-control" id="feedback" name="feedback" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    require_once('dbcon.php'); // Include the dbcon.php file

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the submitted feedback data
        $name = $_POST["name"];
        $feedback = $_POST["feedback"];

        // Validate and sanitize the data (additional validation can be added)
        $name = trim($name);
        $feedback = trim($feedback);

        // Prepare the SQL query to insert the feedback into the "feedbacks" table
        $query = "INSERT INTO feedbacks (name, feedback) VALUES ('$name', '$feedback')";

        // Execute the query
        if (mysqli_query($con, $query)) {
            $_SESSION['message'] = 'Thanks for your feedback!';
            header("Location: feedback.php");
            exit; // Ensure no further code execution after the redirect
        } else {
            echo "<div class='container mt-3'>";
            echo "<p class='fw-bold fs-4 text-center'>Failed to submit feedback. Please try again.</p>";
            echo "</div>";
        }
    }
    ?>

</body>

</html>
