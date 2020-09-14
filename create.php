
<?php 
  include('head.php');
  include('nav.php'); ?>
<body>
<main role="main" class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="" id="weekly" name="weekly">
          <table class="table table-centered table-hovered">
             
                     
            <div>
              <h2>Project Title</h2>
              <input type="text" name="title" class="form-control" id="title">
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
                <td><input type="text" id="rollno" class="form-control"></td>
                <td><input type="text" id="sname" class="form-control"></td>
                <td><input type="email" id="email" class="form-control"></td>
                <td><input type="text" id="phone" class="form-control"></td>
              </tr>
              <tr>
                <td><input type="text" class="rollno form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>       
              </tr>
              <tr>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>          
              </tr>
              <tr>
                <td><input type="text" class="form-control"></td>
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
   <?php include('footer.php'); ?>
   <script type="text/javascript" src="js/app.js"></script>
</html>
