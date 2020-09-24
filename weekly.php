
  <?php include('head.php');
        include('nav.php'); 

  if($_SESSION['role']=='faculty'){

  include('connect.php');
  $sql = "select * from project";
  $result = $conn->query($sql);

  ?>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-12">
      <hr>
      <h3>Monitoring Process Criteria</h3>
      <table class="table text-center table-centered table-hovered">
        
        <form action="" id="weekly" name="weekly">
        <tbody>  
        <tr>
          <td>Select Project</td>
          <td colspan="4" >
            <select class="form-control" id="pname" name="pname">          
            <option value="">Select Project</option>
            <?php       
            if($result->num_rows > 0 ){
              while($rows = $result->fetch_assoc() ){
                echo "<option val=".$rows[pname].">".$rows['pname']."</option>";
                }
              }

            ?>
          </select>
          </td>
          <td> Select Week no</td>
          <td colspan="1">
            <input type="text" name="weekno" class="form-control" id="weekno"></td>
        </tr>       
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
            <input type="date" class="form-control" name="date" id="date" >
            </td>
          </tr>          

        </tbody>
        </table>

        <table class="table text-center table-hovered">
          <tbody>
          <thead  >
            <tr>
              <th rowspan="2">Members</th>
              <th colspan="4">Grading Criteria</th>
              <th rowspan="2">Attendance</th>
              <th rowspan="2">Score</th>
            </tr>
            <tr>              
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
             
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> <div id="member1"></div></td>
              <td><input type="text" id="m11" class="form-control"></td>
              <td><input type="text" id="m12" class="form-control"></td>

              <td><input type="text" id="m13" class="form-control"></td>

              <td><input type="text" id="m14" class="form-control"></td>
              
              <td><input type="checkbox" id="m15" class="chk1 form-control"></td>

              <td><input type="text" id="m1total" class="form-control"></td>
            </tr>
            <tr>
              <td> <div id="member2"></div></td>
              <td><input type="text" id="m21" class="form-control"></td>
              <td><input type="text" id="m22" class="form-control"></td>

              <td><input type="text" id="m23" class="form-control"></td>

              <td><input type="text" id="m24" class="form-control"></td>
              
              <td><input type="checkbox" id="m25" class="chk2 form-control"></td>

              <td><input type="text" id="m2total" class="form-control"></td>
            </tr>
            <tr>
              <td> <div id="member3"></div></td>
              <td><input type="text" id="m31" class="form-control"></td>
              <td><input type="text" id="m32" class="form-control"></td>

              <td><input type="text" id="m33" class="form-control"></td>

              <td><input type="text" id="m34" class="form-control"></td>
              
              <td><input type="checkbox" id="m35" class="chk3 form-control"></td>

              <td><input type="text" id="m3total" class="form-control"></td>
            </tr>
            <tr>
              <td> <div id="member4"></div></td>
              <td><input type="text" id="m41" class="form-control"></td>
              <td><input type="text" id="m42" class="form-control"></td>

              <td><input type="text" id="m43" class="form-control"></td>

              <td><input type="text" id="m44" class="form-control"></td>
              
              <td><input type="checkbox" id="m45" class="chk4 form-control"></td>

              <td><input type="text" id="m4total" class="form-control"></td>
            </tr>

          </tbody>
        
      </table>
      <hr>
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
<script type="text/javascript">
  $(function() {
      $(".chk1").on('change',function(){
      if(this.checked){
      var m1total = parseInt($("#m11").val()) + parseInt($("#m12").val()) 
              + parseInt($("#m13").val()) + parseInt($("#m14").val()) + 2 ;
      $("#m1total").val(m1total) ;
      }      
      else{
        var m1total = parseInt($("#m11").val()) + parseInt($("#m12").val()) 
              + parseInt($("#m13").val()) + parseInt($("#m14").val()) ;
      $("#m1total").val(m1total) ;
      }
      });

      $(".chk2").on('change',function(){
      if(this.checked){
      var m2total = parseInt($("#m21").val()) + parseInt($("#m22").val()) 
              + parseInt($("#m23").val()) + parseInt($("#m24").val()) + 2 ;
      $("#m2total").val(m2total) ;
      }      
      else{
        var m2total = parseInt($("#m21").val()) + parseInt($("#m22").val()) 
              + parseInt($("#m23").val()) + parseInt($("#m24").val())
      $("#m2total").val(m2total) ;
      }
      });

      $(".chk3").on('change',function(){
      if(this.checked){
      var m3total = parseInt($("#m31").val()) + parseInt($("#m32").val()) 
              + parseInt($("#m33").val()) + parseInt($("#m34").val()) + 2 ;
      $("#m3total").val(m3total) ;
      }      
      else{
         var m3total = parseInt($("#m31").val()) + parseInt($("#m32").val()) 
              + parseInt($("#m33").val()) + parseInt($("#m34").val()) ;
      $("#m3total").val(m3total) ;
      }
      });

      $(".chk4").on('change',function(){
      if(this.checked){
      var m4total = parseInt($("#m41").val()) + parseInt($("#m42").val()) 
              + parseInt($("#m43").val()) + parseInt($("#m44").val()) + 2 ;
      $("#m4total").val(m4total) ;
      }      
      else{
        var m4total = parseInt($("#m41").val()) + parseInt($("#m42").val()) 
              + parseInt($("#m43").val()) + parseInt($("#m44").val()) ;
      $("#m4total").val(m4total) ;
      }
      });

    
    $("#pname").on('change',function() {
      var pname = $("#pname").val();
      
      $.ajax({
        url: "display.php",
        type: "GET",
        data:{
          pname: pname          
        },
        dataType: "html",       
        success: function(response){
          $("#member1").html(response);
          $("#member2").html(response);
          $("#member3").html(response);
          $("#member4").html(response);
           
        }
      });
    });

  });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>
