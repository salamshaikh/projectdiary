<?php
include "connect.php";
if (isset($_POST['search'])) {
   $search = $_POST['search'];

   $sql = "select rollno from student where rollno LIKE '%$search%' LIMIT 5";


   $result = $conn->query($sql);
   echo '<ul style="list-style-type: none;">';
   //Fetching result from database.
   while ($rows = $result->fetch_assoc() ) {
       ?>
   <!-- Creating unordered list items.
        Calling javascript function named as "fill" found in "script.js" file.
        By passing fetched result as parameter. -->
   <li class="nav-item dropdown" onclick='fill("<?php echo $rows['rollno']; ?>")'>
   
   <a href="profile.php?rollno=<?php echo $rows['rollno']; ?>" class="dropdown-item">
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
       <?php echo $rows['rollno']; ?>
   </a>
   </li>
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
   <?php
}}
?>
</ul>