<div class="container-fluid">
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

          $sql = "SELECT title, content FROM blog_data where id=1";
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