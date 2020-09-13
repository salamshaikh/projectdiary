<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Weekly Monitoring</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
  </head>
  <body>
  <?php include('nav.php'); ?>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Monitoring Process Criteria</h3>
      <table class="table text-center table-centered table-hovered">
        
        <form action="" id="weekly" name="weekly">
        <tbody>         
         <tr>
            <td colspan="6">
              <label for="status">Status</label>
             <textarea class="form-control" name="status"></textarea>
             </td>
            <td colspan="6">
              <label for="todo">To Do</label>
              <textarea class="form-control" name="todo"></textarea>
            </td>
            <td colspan="1">
              <label for="date">Date</label><br>
            <input type="date"  name="date" id="date" >
            </td>
          </tr>          

        </tbody>
        </table>

        <table>
          <tbody>
          <thead class="table text-center table-hovered" >
            <tr>
              <th>Grading Criteria</th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>Attendance</th>
              <th>Score</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> Member 1</td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>

              <td><input type="text" class="form-control"></td>

              <td><input type="text" class="form-control"></td>
              
              <td><input type="text" class="form-control"></td>

              <td><input type="text" class="form-control"></td>
            </tr>
                        <tr>
              <td> Member 2</td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>

              <td><input type="text" class="form-control"></td>

              <td><input type="text" class="form-control"></td>
              
              <td><input type="text" class="form-control"></td>

              <td><input type="text" class="form-control"></td>
            </tr>
                        <tr>
              <td> Member 3</td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>

              <td><input type="text" class="form-control"></td>

              <td><input type="text" class="form-control"></td>
              
              <td><input type="text" class="form-control"></td>

              <td><input type="text" class="form-control"></td>
            </tr>
                        <tr>
              <td> Member 4</td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>

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

</body>
</html>
