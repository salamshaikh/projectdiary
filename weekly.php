
  <?php include('head.php');
        include('nav.php'); ?>

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
