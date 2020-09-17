
  <?php include('head.php');
      include('nav.php'); ?>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-6">
      <?php     
      include('connect.php'); 
      // echo $_SESSION['user'];
      // echo $_SESSION['role'];
      $rollno = $_SESSION['user'];
      //echo "sesion value : ".$rollno;
    
      $sql = "select * from student where username ='$rollno'";
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
      <h2>Update Profile</h2>
      <form class="form-signin" action="request.php" method="post"  >
    <!-- <form class="form-signin" name="loginform" action="$_SERVER['PHP_SELF']" method="post"  >-->
    

      <div class="row">
        <div class="col-md-4">
          Rollno
        </div>
        <div class="col-md-8">
          <input class="form-control" type="text" id="rollno" name="username" placeholder="Roll No" disabled value="<?php echo $row['username']; ?>">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          Password
        </div>
        <div class="col-md-8">
          <input class="form-control" type="password" id="pwd" name="pwd" placeholder="Password">
      
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          Retype Password
        </div>
        <div class="col-md-8">               
          <input class="form-control" type="password" id="repwd" name="repwd" placeholder="Re type Password">
        </div>
      </div>
      <br>
      <div class="row">
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
      <br>
      <div class="row">
        <div class="col-md-4">
          Mobile
        </div>
        <div class="col-md-8">
        <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile No" value="<?php echo $row['mobile']; ?>">
      
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          Email
        </div>
        <div class="col-md-8">

          <input id="email" type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>" >

        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          Upload Photo
        </div>
        <div class="col-md-8">
    
          <input type="file" placeholder="" class="form-control" name="Profile">
          </div>
      </div>  
      <hr class="mb-3">
      <div class="row">
        <div class="col-md-12 text-center">
          <button name="btnDelete" class="btn btn-danger"> Delete my account</button>
          <input type="submit" class="btn btn-success" name="btnUpdate" id="submit-btn" value="Update">
        </div>
      </div>
    
      <br>
      
      </form>
      <?php
       }
      }
      ?>
    </div>

  </div>
</main><!-- /.container -->
<?php include('footer.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/app.js"></script>

</body>
</html>
