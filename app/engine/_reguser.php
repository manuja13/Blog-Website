<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Blog using PHP & MySQL</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2  p-4"></div>
      <div class="col-sm-8 p-4">

        <?php 
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $pass1 = $_POST['pwd'];
        $pass2 = $_POST['repwd'];

        $salt = "I Love Ice Cream";
        $hash =md5($email.$salt);
        $qry = "INSERT INTO `user` (`UID`, `uhash`, `fname`, `lname`, `dob`, `email`, `password`) VALUES (NULL, '$hash', '$firstname', '$lastname', '$dob', '$email', '$pass1')";
        #echo $qry. "<br>";

        if($pass1 === $pass2){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "offtrails";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }try{

                if (mysqli_query($conn, $qry)) {
                    echo "<div class='alert alert-success' role='alert'>Your account has been created !</div>";
                    #echo "New record created successfully";
                    echo "<br> <div class='d-grid'> <a href='\index.php' class='btn btn-dark '>Home</a> </div>";
                } else {
                    echo "<div class='alert alert-warning' role='alert'>There is Something went wrong. Try again later!</div>";
                    #echo "Something went wrong. Try again latter";
                    echo "<br> <div class='d-grid'> <a href='\index.php' class='btn btn-dark btn-block'>Home</a> </div>";
                }
        }catch(error $e)  {
            echo "<div class='alert alert-warning' role='alert'>Something went wrong. Try again later!</div>";
            #echo"Something went wrong. Try again latter";
            echo "<br> <div class='d-grid'> <a href='\index.php' class='btn btn-dark btn-block'>Home</a> </div>";
        }
                mysqli_close($conn); 
        }else{
                echo "<div class='alert alert-warning' role='alert'>Passwords do not match! Try again.</div>";
                #echo'Passwords do not match!. Try Again';
                echo "<br> <div class='d-grid'> <a href='\index.php' class='btn btn-dark btn-block'>Home</a> </div>";
        }

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
