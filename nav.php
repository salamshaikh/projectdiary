 <header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Online Project Diary</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <?php 
            if(!isset($_SESSION['user'])){
      ?>
      <li class="nav-item">
        <a class="nav-link" href="signin.php"> Sign In </a>
      </li>
      <?php 
      }
      
      if(isset($_SESSION['role'])=="faculty"){
      ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Group</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="addproject.php">Add</a>
          <a class="dropdown-item" href="viewproject.php">View</a>
          <a class="dropdown-item" href="#">Manage</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Weekly</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="createweekly.php">Add</a>
          <a class="dropdown-item" href="viewweekly.php">View</a>
          <a class="dropdown-item" href="#">Manage</a>
        </div>
      </li>
     
    
      <li class="nav-item">
        <a class="nav-link" href="weekly.php">Weekly Monitoring</a>
      </li>
      
      <?php
        }      
      else if(isset($_SESSION['role'])=="student")
      {
      ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Group</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">        
          <a class="dropdown-item" href="viewproject.php">View</a>          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Weekly</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="viewweekly.php">View</a>          
        </div>
      </li>
     
    
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      
      <?php
        }
        else
        {
          echo "";
        }
        if(isset($_SESSION['user'])){

      ?>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
     <?php

        }
      ?>
      <!--
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    -->
    <li class="nav-item dropdown">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" id="search" type="text" placeholder="Search" aria-label="Search">
      <div class="dropdown-item" id="display"></div>
      <!-- <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button> -->
    </form>
    </li>
    </ul>
    <script>
    function fill(Value) {
       //Assigning value to "search" div in "search.php" file.
       $('#search').val(Value);
       //Hiding "display" div in "search.php" file.
       $('#display').hide();
    }
    $(document).ready(function() {
    //On pressing a key on "Search box" in "search.php" file. This function will be called.


    $("#search").keyup(function() {
       //Assigning search box value to javascript variable named as "name".
       var name = $('#search').val();
       //Validating, if "name" is empty.
       if (name == "") {
           //Assigning empty value to "display" div in "search.php" file.
           $("#display").html("");
       }
       //If name is not empty.
       else {
           //AJAX is called.
           $.ajax({
               type: "POST",                  //AJAX type is "Post".
               url: "ajax.php",               //Data will be sent to "ajax.php".
               data: {                        //Data, that will be sent to "ajax.php".
                   search: name               //Assigning value of "name" into "search" variable.
               },
               //If result found, this funtion will be called.
               success: function(response) {
                   //Assigning result to "display" div in "search.php" file.
                   $("#display").html(response).show();
                }
              });
            }
          });
        });
    </script>
  </div>
  </nav>
 </header>