<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

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
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
    <form action="request.php" method="post" class="form-signin">
  
  <img class="mb-4" src="img/logo.jpg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Student Login</h1>

  <label for="inputEmail" class="sr-only">Email address</label>

  <input type="text" id="rollno" class="form-control" name="rollno" placeholder="Roll No" required autofocus>

  <label for="inputPassword" class="sr-only">Password</label>

  <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>


  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <input value="Sign In" name="btnLogin" class="btn btn-xs btn-dark btn-block" type="submit">
  <p class="mt-5 mb-3 ">Don't have an account, <a href="register.html">Sign up</a> Now !</p>

  <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="js/app.js"></script>

</body>
</html>
