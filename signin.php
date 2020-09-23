<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Project Diary</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">    
    <div class="container">
      <img class="mb-4" src="img/logo.jpg" alt="" width="250" height="250">
      <h1 class="h3 mb-3 font-weight-normal">ONLINE PROJECT DIARY</h1>
      <h5>Developed by Abdul Salam</h5>
        <!-- Trigger the modal with a button -->
      <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#student">Student Login</button>.
      <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#faculty">Faculty Login</button>
     
      
        <!-- Modal -->
        <div class="modal fade" id="student" role="dialog">
          <div class="modal-dialog modal-sm">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Student Login</h4>
              </div>
              <div class="modal-body">
                <form method="post" class="form-signin">
                   
                  <img class="mb-4" src="img/logo.jpg" alt="" width="72" height="72"><hr>
                  
                  <label for="inputEmail" class="sr-only">Email address</label>
                  
                  <input type="text" id="rollno" class="form-control" name="rollno" placeholder="Roll No" required autofocus>
                  <br>
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
        <div class="modal fade" id="faculty" role="dialog">
          <div class="modal-dialog modal-sm">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Faculty Login</h4>
              </div>
              <div class="modal-body">
                <form method="post" class="form-signin">
                    
                   <img class="mb-4" src="img/logo.jpg" alt="" width="72" height="72"><hr>             
                  <label for="fEmail" class="sr-only">Email address</label>

                  <input type="text" id="femail" class="form-control" name="femail" placeholder="Email ID" required autofocus>
                  <br>
                  <label for="inputPassword" class="sr-only">Password</label>

                  <input type="password" id="fpwd" name="fpwd" class="form-control" placeholder="Password" required>
                  <br>
                  <div id="facultyerr"></div>
                  <br>
                  <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" value="remember-me"> Remember me
                    </label>
                  </div>
                  <input id="btnFacLogin" value="Sign In" name="btnFacLogin" class="btn btn-md btn-primary btn-block" type="submit">
                  <p class="mt-5 mb-3 ">Lost Password, <a href="reset.php">Reset</a> Now !</p>

                  
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
        </div>
        <hr>
        <p class="mt-5 mb-3 text-muted">AIKTC &copy; 2017-2020</p>
      </div>
      
      <script src="js/app.js"></script>
      <script>
        $(function(){

          $("#student").on('submit',function(e) { 
            e.preventDefault();           
            var rollno = $('#rollno').val();
            var pwd = $('#pwd').val();
            
            $.ajax({
            type: 'POST',
            url: 'checkuser.php',
            data: {
                rollno: rollno,
                pwd: pwd
            },                 
            success: function (data, status, xhr) {
              // alert(data);
              // alert(status);
              if(data == "false")
                {                  
                  $("#usererr").html('<span class="alert alert-danger" role="alert">Invalid username / password </span>');
                  
                }
              else {
                
                $("#usererr").html('<span class="alert alert-success role="alert"">Loggin you in</span>');
                setTimeout(function() {
                    window.location.href = "profile.php";
                  }, 2000);
                
              }
            },
            error: function (jqXhr, textStatus, errorMessage) {
                alert('Error: ' + errorMessage);
              }
            });
          });

          $("#faculty").on('submit',function(e) {
              e.preventDefault();
              var femail = $("#femail").val();
              var fpwd = $("#fpwd").val();

              $.ajax('checkfaculty.php',{
                type: 'POST',
                data: { 
                  femail : femail,
                  fpwd  : fpwd
                },
                success: function(data, status, xhr){
                  if(data == "false"){
                    $("#facultyerr").html("<span class='alert alert-danger'> Invalid username or password</span> ");
                  }
                  else
                  {
                    $("#facultyerr").html("<span class='alert alert-success'> Logging in</span> ");
                    setTimeout(function(){
                      window.location.href = "facprofile.php";
                    }, 2000);
                  }

                },
                error : function(jqXhr,textStatus,errorMessage)
                {
                  $("#facultyerr").html("<span class='alert alert-danger'>Something went wrong.."
                    + errorMessage + "</span> ");
                }
                });
          });

          // $("#faculty").on('submit',function(e){
          //   e.preventDefault();

          //   var femail = $("#femail").val();
          //   var fpwd = $("#fpwd").val();
            
          //   $.ajax({
          //     url: "checkfaculty.php",
          //     type: "POST",
          //     data: {                
          //       femail: femail,
          //       fpwd: fpwd
          //     },
          //     success: function (data,status,xhr){
          //       if(data=="false"){
          //         $("#facultyerr").html("<span class='alert alert-danger'>Invalid username or password</span>");
          //       }
          //       else{
          //           $("#facultyerr").html("<span class='alert alert-success'>Logging in</span>");
          //           setTimeout(function(){
          //             window.location.href= 'facprofile.php'
          //           },2000);
          //       }
          //     },

          //     error: function (jqXhr,textStatus,errorMessage){
          //       alert('Error: ' + errorMessage);
          //     }

          //   });
          // });
        });
      </script>
  </body>
</html>
