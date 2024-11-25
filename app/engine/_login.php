<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Blog</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2  p-4"></div>
      <div class="col-sm-8 p-4">

<?php 

$email = $_POST['email'];
$pass1 = $_POST['pwd'];

$qry = "SELECT * from user Where `email` = '$email' AND `password` = '$pass1' ";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "offtrails";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$result = mysqli_query($conn, $qry);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    session_unset();
    //session_destroy();
    session_start();
    echo "  <div class='alert alert-success'>User found and logged in.</div>";
    echo "<br> <div class='d-grid'> <a href='\index.php' class='btn btn-success '>Home</a> </div>";
    echo "<br> <div class='d-grid'> <a href='\app\dashboard\index.php' class='btn btn-success'>Admin Pannel</a> </div>";
    
  }
} else {
  echo "<div class='alert alert-danger'>Invalid username or Password. Try again!</div>";
  echo "<br> <div class='d-grid'> <a href='\index.php' class='btn btn-success '>Home</a> </div>";
}

mysqli_close($conn);


?>
 </div>
      <div class="col-sm-2  p-4"></div>
    </div>
  </div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>


