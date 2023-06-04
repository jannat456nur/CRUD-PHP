<?php
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Font awesome kit -->

  <script src="https://kit.fontawesome.com/d5d25df65b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="products.css">
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
  <div class="card-group mt-5">
    <?php
    $query = "SELECT * FROM products";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) > 0) {
      while ($product = mysqli_fetch_assoc($query_run)) {
        ?>
        <div class="card border-0 p-4">
          <img src="<?php echo $product['img']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
              <?php echo $product['type']; ?>
            </h5>
            <h5 class="card-title text-secondary fs-4">
              <?php echo $product['name']; ?>
            </h5>
            <a class="details" href="details.php">Details</a>
          </div>
        </div>
        <?php
      }
    } else {
      echo "<p>No products found.</p>";
    }
    ?>
  </div>

  <!-- Another row -->
  <div class="card-group mt-5">
    <?php
    // Retrieve different products or use a different query for the second row
    // You can modify the query based on your requirements
    
    if (mysqli_num_rows($query_run) > 0) {
      while ($product = mysqli_fetch_assoc($query_run)) {
        ?>
        <div class="card border-0 mb-5 p-4">
          <img src="<?php echo $product['img']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
              <?php echo $product['type']; ?>
            </h5>
            <h5 class="card-title text-secondary fs-4">
              <?php echo $product['name']; ?>
            </h5>
            <a class="details" href="details.php">Details</a>
          </div>
        </div>
        <?php
      }
    } else {
      echo "<p>No products found.</p>";
    }
    ?>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>