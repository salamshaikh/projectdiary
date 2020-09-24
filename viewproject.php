
  <?php include('head.php');
      include('nav.php'); ?>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-12">
      <?php     
      include('connect.php'); 
      $femail = $_SESSION['user'];
      //echo "sesion value : ".$femail;
    
      $sql = "select * from faculty where femail ='$femail'";
      //echo $sql;

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        //echo "Welcome ".$rollno;        
        while($row = $result->fetch_assoc()) {        
        ?>
       
      <br>
      <h3>View Project</h3>
      <hr>
     
      <?php
       }
      }
      ?>
    </div>
    <hr>
    <br>
    <div class="row">
        <div class="btn-group" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-primary">Search Projects</button>
          <button type="button" class="btn btn-secondary">All Project</button>
          <button type="button" class="btn btn-secondary">Machine Learning</button>
          <button type="button" class="btn btn-secondary">Cloud Computing</button>
          <button type="button" class="btn btn-secondary">Image Processing</button>
          <button type="button" class="btn btn-secondary">Data Mining</button>
          <button type="button" class="btn btn-secondary">Networking</button>
        </div>
    </div>
       
    <div class="container" id="responseDiv">
       <hr>
    </div>
    <!-- 
    <div class="row">
      <div class="col-md-12">
      <table class="table table-centered table-hovered">
      <thea>
        <th>Project ID</th>
        <th>Project Name</th>
        <th>Project Guide</th>
        <th>Project Domain</th>
        <th>Project Batch</th>
        <th colspan=3>Action</th>
      </thea>
      <?php
        $sql = "select * from project";
              $result = $conn->query($sql);
              if($result->num_rows > 0 )
               {
                while($rows = $result->fetch_assoc()){
                  echo "<tr>";
                  echo "<td>".$rows['pid']."</td>";
                  echo "<td>".$rows['pname']."</td>";
                  echo "<td>".$rows['guide']."</td>";
                  echo "<td>".$rows['pdomain']."</td>";
                  echo "<td>".$rows['pbatch']."</td>";

                  echo "<td><button id='btnShow' class='btn btn-sm btn-success'>Show</button></td>";

                  echo "<td><button id='btnEdit' class='btn btn-sm btn-info'>Edit</button></td>";
                  
                  echo "<td><button id='btnDelete' class='btn btn-sm btn-danger'>Delete</button></td>";
                  echo "</tr>";
                }
              }
      ?>
      </table>
      </div>

    </div> -->
  </div>
</main><!-- /.container -->
<?php include('footer.php'); ?>
<script type="text/javascript">
  $(function() {
    var domain = "";
    $(".btn-group > button.btn").on("click",function() {
      domain = this.innerHTML;
      
      $.ajax({
        url: "display.php",
        type: "GET",
        data: {
          domain : domain
        },
        dataType: "html",
        success: function(response){
          $("#responseDiv").html(response);
        },
        error: function(){
          alert("Error");
        }
      });
    });

  });
</script>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
