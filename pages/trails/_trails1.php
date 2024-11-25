<style>
  body {
    background-image: linear-gradient(to right bottom, #000000, #151013, #201b20, #2a252f, #32313f, #393b4b, #414656, #485162, #545c6c, #606877, #6c7381, #797f8c);
    background-size:300% 300%;
    animation:color 12s ease-in-out infinite;
    background-attachment:fixed;
    color:white;
  }
  @keyframes color{
    0%{
      background-position: 0 50%;
    }
    50%{
      background-position: 100% 50%;
    }
    100%{
      background-position: 0 50%;
    }
  }
h2{
  color:blue;
}


</style>


<div class="container">
  <div class="row">
      <div class="col-sm-12 p-4">
        <p>
        <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "offtrails";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT title, content FROM trails where id=1";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<h1>" . urldecode($row["title"]). "</h1>"."<br>" . urldecode($row["content"])."<br>";
            }
          } else {
            echo "0 results";
          }
          $conn->close();
?>
        
        </p>
      </div>
  </div>
</div>