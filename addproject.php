
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
    
      <div class="modal fade" id="showmodal" role="dialog">
          <div class="modal-dialog modal-sm">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">View</h4>
              </div>
              <div class="modal-body">
                <form method="post" class="form-signin">
                   
                  <img class="mb-4" src="img/logo.jpg" alt="" width="72" height="72"><hr>
                  
                  <label for="inputEmail" class="sr-only">Email address</label>
                  
                  <input type="text" id="rollno" class="form-control" name="rollno" placeholder="Roll No" required autofocus>

                  <label for="inputPassword" class="sr-only">Password</label>

                  <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Password" required>
                  <br>
                  <div id="usererr"></div>
                  <br>
                  <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" value="remember-me"> Remember me
                    </label>
                  </div>
                  <input value="Sign In" name="btnLogin" class="btn btn-md btn-success btn-block" type="submit">
                  <p class="mt-5 mb-3 ">Don't have an account, <a href="register.html">Sign up</a> Now !</p>
                  <p class="mt-5 mb-3 ">Lost Password, <a href="reset.php">Reset</a> Now !</p>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
        </div>

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

            if($result->num_rows > 0 ){
              while($rows = $result->fetch_assoc() ){
                echo "<option val=".$rows[fname].">".$rows['fname']."</option>";
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
    <hr>
    <div class="row">
      <div class="col-md-12">
        <button type="button" id="display" class="btn btn-primary">
            Display Project Details
        </button>
      </div>
    </div>
    <br>
    <div class="container" id="responseDiv">

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
    $("#display").click(function() { 
        $.ajax({
          url: "display.php",
          type: "GET",
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
