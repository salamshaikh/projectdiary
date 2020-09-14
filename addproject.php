
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

        <!--   echo "<br>id: " . $row["id"]. " - Roll no: " . $row["username"]. " Class : " . $row["class"]. "<br>";
                  echo "<br> Mobile No - " . $row["mobile"]. " - Email: " . $row["email"];
                }
              } else {
                echo "0 results";
              }
         -->
      <br>
      <h3>Add New Project</h3>
      <hr>
      <form class="form-signin" action="functions.php" method="post"  >
    <!-- <form class="form-signin" name="loginform" action="$_SERVER['PHP_SELF']" method="post"  >-->
    

      <div class="row">
        <div class="col-md-2">
         Project Title
        </div>
        <div class="col-md-4">
          <input class="form-control" type="text" name="pname" placeholder="Enter Project Title" value="">
        </div>
      
        <div class="col-md-2">
          Project Domain
        </div>
        <div class="col-md-4">
          <select class="form-control" id="pdomain" name="pdomain">
            
            <option value="">Select Domain</option>
            <option value="Machine Learning">Machine Learning</option>
            <option value="Cloud Computing">Cloud Computing</option>
            <option value="Image Processing">Image Processing</option>
            <option value="Networking">Networking</option>
            <option value="Data Mining">DATA MINING</option>

          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          Select Year / Batch
        </div>
        <div class="col-md-4">               
          <select class="form-control" id="pbatch" name="pbatch">
          
            <option value="">Select Year</option>            
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
          </select>
        </div>
      
      
      <!-- <div class="row">
        <div class="col-md-4">
          Class
        </div>
        <div class="col-md-8">
          <select class="form-control" id="class" name="class">
            <option value="<?php echo $row['class']; ?>">
              <?php echo $row['class']; ?> </option>
            <option value="">Select your Class</option>
            <option value="SECO">SE Computer</option>
            <option value="TECO">TE Computer</option>
            <option value="BECO">BE Computer</option>
          </select>
      
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-4">
          Mobile
        </div>
        <div class="col-md-8">
        <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile No" value="<?php echo $row['mobile']; ?>">
      
        </div>
      </div>
 -->
      
        <div class="col-md-2">
          Select Guide
        </div>
        <div class="col-md-4">

          <select class="form-control" id="guide" name="guide">          
            <option value="">Select Guide</option>            
            <?php
              include('connect.php');
              $sql = "select fname from faculty";
              $result = $conn->query($sql);
              if($result->num_rows > 0 )
              {
                while($rows = $result->fetch_assoc()){
                  echo "<option value=".$row['fname']." > ".$row['fname']. " </option>";
                }
              }

            ?>
          </select>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-md-4">
          Upload Photo
        </div>
        <div class="col-md-8">
    
          <input type="file" placeholder="" class="form-control" name="Profile">
          </div>
      </div>  --> 
      <hr class="mb-3">
      <div class="row">
        <div class="col-md-12 text-center">
          
          <input type="submit" class="btn btn-success" name="btnAddProject" id="addProject" value="Submit">
        </div>
      </div>
          
      </form>
      <?php
       }
      }
      ?>
    </div>
    <div class="row">
      <div class="col-md-12">
      <table class="table table-centered table-hovered">
      <thea>
        <th>Project ID</th>
        <th>Project Name</th>
        <th>Project Guide</th>
        <th>Project Domain</th>
        <th>Project Batch</th>
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
                  echo "</tr>";
                }
              }
      ?>
      </table>
      </div>

    </div>
  </div>
</main><!-- /.container -->
<?php include('footer.php'); ?>

</body>
</html>
