
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
          Select Year / Batch
        </div>
        <div class="col-md-2">               
          <select class="form-control" id="pbatch" name="pbatch">
          
            <option value="">Select Year</option>            
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
          </select>
        </div>  
        <div class="col-md-2">
          Group No
        </div>
        <div class="col-md-2">
          <input type="text" id="groupno" name="groupno" class="form-control" placeholder="Group No" >
      
        </div>
       
        
      
        <div class="col-md-2">
          Select Guide
        </div>
        <div class="col-md-2">

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
      <br>
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

    <br>
      <div class="row">
        <div class="col-md-3">
          Member1
        </div>
        <div class="col-md-3">
          <select class="form-control" id="member1" name="member1">          
            <option value="">Select Member 1</option>
            <?php
            include('connect.php');
            $sql = "select rollno from student";            
            $result = $conn->query($sql);

            if($result->num_rows > 0 ){
              while($rows = $result->fetch_assoc() ){
                echo "<option val=".$rows[rollno].">".$rows['rollno']."</option>";
                }
              }

            ?>
          </select>
        </div>
        <div class="col-md-3">
          Member2
        </div>
        <div class="col-md-3">
          <select class="form-control" id="member2" name="member2">          
            <option value="">Select Member 2</option>
            <?php
            include('connect.php');
            $sql = "select rollno from student";            
            $result = $conn->query($sql);

            if($result->num_rows > 0 ){
              while($rows = $result->fetch_assoc() ){
                echo "<option val=".$rows[rollno].">".$rows['rollno']."</option>";
                }
              }

            ?>
          </select>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-3">
          Member3
        </div>
        <div class="col-md-3">
          <select class="form-control" id="member3" name="member3">          
            <option value="">Select Member 3</option>
            <?php
            include('connect.php');
            $sql = "select rollno from student";            
            $result = $conn->query($sql);

            if($result->num_rows > 0 ){
              while($rows = $result->fetch_assoc() ){
                echo "<option val=".$rows[rollno].">".$rows['rollno']."</option>";
                }
              }

            ?>
          </select>
        </div>
        <div class="col-md-3">
          Member4
        </div>
        <div class="col-md-3">
          <select class="form-control" id="member4" name="member4">          
            <option value="">Select Member 4</option>
            <?php
            include('connect.php');
            $sql = "select rollno from student";            
            $result = $conn->query($sql);

            if($result->num_rows > 0 ){
              while($rows = $result->fetch_assoc() ){
                echo "<option val=".$rows[rollno].">".$rows['rollno']."</option>";
                }
              }

            ?>
          </select>
        </div>

      </div>  
      <hr class="mb-3">
      <div class="row">
        <div class="col-md-12 text-center">
          
          <input type="submit" class="btn btn-success" name="btnAddProject" id="addProject" value="Submit">
        </div>
      </div>
      <br>
      </form>
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
          <button type="button" class="btn btn-secondary">DATA MINING</button>
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
       
        $(".btn-group > button.btn").on("click", function(){
          domain = this.innerHTML;        
        
        $.ajax({
          url: "display.php",
          type: "GET",
          data: {
          domain: domain },
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
