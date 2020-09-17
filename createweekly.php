<?php 
  include('head.php');
  include('nav.php'); 
  include('connect.php'); 

  if($_SESSION['role']=='faculty'){

  function displaystudents(){
    if($resultstudents->num_rows > 0 )
      {
        while($rows = $resultstudents->fetch_assoc()){
          echo "<option value=".$rows['username']." > ".
          $rows['username']. " </option>";
        }
      }
  }

  $sqlproj = "select pname,guide from project";
  $resultProj = $conn->query($sqlproj);

  $sqlstudents = "select username from student order by username";
  $resultstudents = $conn->query($sqlstudents);
  ?>
<body>
<main role="main" class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-6">
          <h2>Project Title</h2>
          <select class="form-control" id="pname" name="pname">          
          <option value="">Select Project</option> 
          <?php

          if($resultProj->num_rows > 0 )
          {
            while($rows = $resultProj->fetch_assoc()){
              echo "<option value=".$rows['pname']." > ".
              $rows['pname']. " </option>";
          }
          
          }
          ?>
          </select>
        </div>
        <div class="col-md-6">
          <h2>Guide</h2>
          <input type="text" disabled value="<?php echo $rows['guide']; ?>" name="guide" id="guide">
          </select>
        </div>
    </div>
    
    <div class="col-md-12">
      <form action="" id="weekly" name="weekly">
        <table class="table table-centered table-hovered">
          <hr>
          <h2> Project Group Member Details</h2>   
          <thead class="table table-hovered text-center" >
            <tr>
              <th>Roll No</th>
              <th>Name</th>
              <th>Email ID </th>
              <th>Phone </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <select class="form-control">          
                <option value="">Select Students</option> 
                <?php
                  displaystudents();
                ?>
                </select>

              </td>
              <td><input type="text" class="form-control"></td>
              <td><input type="email" id="email" class="form-control"></td>
              <td><input type="text" id="phone" class="form-control"></td>
            </tr>
            <tr>
              <td>
                <select class="form-control">          
                <option value="">Select Students</option> 
                <?php
                  displaystudents();
                ?>
                </select>
              </td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
              <td>
              <select class="form-control">          
                <option value="">Select Students</option> 
                <?php
                  displaystudents();
                ?>
                </select>
              </td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
              <td>
              <select class="form-control" >          
                <option value="">Select Students</option> 
                <?php
                  displaystudents();
                ?>
                </select>
              </td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
            </tr>
          </tbody>        
        </table>
          <div class="col-md-12 text-center">
              <button class="btn btn-primary btn-sm">Submit</button>
          </div>
          
      </form>

    </div>

  </div>
</main><!-- /.container -->
   <?php 
  }
    include('footer.php'); ?>
   <script type="text/javascript" src="js/app.js"></script>
   <script>
    $(".rollno").blur(function() {
      alert('Hi');
    });

   </script>

</html>
