
  <?php include('head.php');
      include('nav.php'); ?>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-6">
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
      <h2>Update Profile</h2>
      <form class="form-signin" action="functions.php" method="post"  >
    <!-- <form class="form-signin" name="loginform" action="$_SERVER['PHP_SELF']" method="post"  >-->
    

      <div class="row">
        <div class="col-md-4">
          User ID
        </div>
        <div class="col-md-8">
          <input class="form-control" type="text" name="username" placeholder="Email" disabled value="<?php echo $row['femail']; ?>">
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-4">
          Password
        </div>
        <div class="col-md-8">
          <input class="form-control" type="password" id="pwd" name="pwd" placeholder="Password">
      
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          Retype Password
        </div>
        <div class="col-md-8">               
          <input class="form-control" type="password" id="repwd" name="repwd" placeholder="Re type Password">
        </div>
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
      <div class="row">
        <div class="col-md-4">
          Email
        </div>
        <div class="col-md-8">

          <input id="femail" type="email" name="femail" class="form-control" placeholder="Email" value="<?php echo $row['femail']; ?>" >

        </div>
      </div>
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
