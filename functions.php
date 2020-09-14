<?php

session_start();
include('connect.php');
$fpwd =  $femail = "";
	
	
	$fpwd = test_input($_POST['fpwd']);	
	$fpwd = md5($fpwd);
	$femail = test_input($_POST['femail']);
	

if(isset($_POST['btnFacRegister'])){

	$sql = "insert into faculty (fname,fpwd,femail)
			values ('$fname','$fpwd',$femail') "; 

	//echo $sql;
	if ($conn->query($sql) === TRUE) {
		$_SESSION['user']= $femail;
		$_SESSION['role']= 'faculty';
		header("refresh:5;url=facprofile.php" );
  		echo 'You\'ll be redirected in about 5 secs. If not, click <a href="facprofile.php">here</a>.';
	} 
	else {
		header("refresh:5;url=register.html" );
  		echo "Error: " . $sql . "<br>" . $conn->error;
  		echo '<br> You\'ll be redirected in about 3 secs. If not, click <a href="signin.php">here</a>.';
	}
}
else if(isset($_POST['btnFacLogin'])){
	echo "Welcome <br>";
	
	$femail = test_input($_POST['femail']);
	$fpwd = test_input($_POST['fpwd']);

	$fpwd = md5($fpwd);

	$sql = "select * from faculty where femail ='$femail' and fpwd = '$fpwd' ";
	//echo $sql;

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
		$_SESSION['user']= $femail;
		$_SESSION['role']= 'faculty';

		header("refresh:5;url=facprofile.php" );
  		echo 'You\'ll be redirected in about 5 secs. If not, click <a href="facprofile.php">here</a>.';
			 
	} else {
	  header("refresh:5;url=signin.php" );
  		echo '<h2> Invalid Credentials </h2> <br> You\'ll be redirected in about 3 secs. If not, click <a href="signin.php">here</a>.';
	}
}

else{
	echo "<h2> Invalid operation</h2>";
}

function test_input($data) {
  $data = trim($data); // Removes extra space, ta
  $data = stripslashes($data); // Removes backslashes 
  $data = htmlspecialchars($data); //  
  return $data;
}

?>
