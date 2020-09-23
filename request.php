<?php
session_start();
include('connect.php');
$pwd = $fullname = $rollno = $mobile = $class = $email = $text = "";
	


if(isset($_POST['btnRegister'])){
	
	$rollno = test_input($_POST['rollno']);
	$fullname = test_input($_POST['fullname']);
	// $pwd = test_input($_POST['pwd']);
	// $repwd = test_input($_POST['repwd']);
	$pwd = md5($rollno);
	$email = test_input($_POST['email']);
	$class = test_input($_POST['class']);
	$mobile = test_input($_POST['mobile']);
	$sql = "insert into student (rollno,fullname, pwd,class,mobile,email)
			values ('$rollno','$fullname','$pwd','$class',$mobile,'$email') "; 

	echo $sql;
	$role= "student";
	if ($conn->query($sql) === TRUE) {
		$_SESSION['user']= $rollno;
		$_SESSION['role']= $role;
		header("refresh:2;url=profile.php" );
  		echo 'You\'ll be redirected in about 5 secs. If not, click <a href="profile.php">here</a>.';
	} 
	else {
		header("refresh:2;url=register.html" );
  		echo "Error: " . $sql . "<br>" . $conn->error;
  		echo '<br> You\'ll be redirected in about 3 secs. If not, click <a href="signin.php">here</a>.';
	}
}

else if(isset($_POST['btnLogin'])){
	echo "Welcome <br>";
	
	$rollno = test_input($_POST['rollno']);
	$pwd = test_input($_POST['pwd']);

	$pwd = md5($pwd);

	$sql = "select * from student where rollno ='$rollno' and pwd = '$pwd' ";
	//echo $sql;

	$result = $conn->query($sql);
	$role = "student";
	if ($result->num_rows > 0) {
	  // output data of each row
		$_SESSION['user']= $rollno;
		$_SESSION['role']= $role;
		header("refresh:3;url=profile.php" );
  		echo 'You\'ll be redirected in about 5 secs. If not, click <a href="profile.php">here</a>.';
		
	  // while($row = $result->fetch_assoc()) {
	  //   echo "<br>id: " . $row["id"]. " - Roll no: " . $row["rollno"]. " Class : " . $row["class"]. "<br>";
	  //   echo "<br> Mobile No - " . $row["mobile"]. " - Email: " . $row["email"];
	  // }
	} else {
	  header("refresh:5;url=signin.php" );
  		echo '<h2> Invalid Credentials </h2> <br> You\'ll be redirected in about 3 secs. If not, click <a href="signin.php">here</a>.';
	}
}
else if(isset($_POST['btnUpdate'])){
	
	$rollno = test_input($_POST['rollno']);
	$fullname = test_input($_POST['fullname']);
	$pwd = test_input($_POST['pwd']);
	$repwd = test_input($_POST['repwd']);	
	$email = test_input($_POST['email']);
	$class = test_input($_POST['class']);
	$mobile = test_input($_POST['mobile']);

	$user = $_SESSION['user'];
	if($pwd == $repwd)
	{
			$pwd = md5($pwd);
	}
	$sql = "update student set pwd='$pwd', class='$class', mobile = $mobile,
	email = '$email', updated_at = CURRENT_TIMESTAMP() where rollno = '$user'";
	//echo $sql;

	if( $conn->query($sql) === TRUE )
	{
		header("refresh:5;url=profile.php" );
  		echo '<h2>Your profile is updated !</h2>';
  		echo 'You\'ll be redirected in about 5 secs. If not, click <a href="profile.php">here</a>.';
	}
	else{
		echo '<h2>Please try again</h2>';
		header("refresh:5;url=profile.php" );
  		echo 'You\'ll be redirected in about 5 secs. If not, click <a href="profile.php">here</a>.';
	}

}
else if(isset($_POST['btnDelete'])){
	echo "<h2>Your Profile is deleted</h2>";
	$user = $_SESSION['user'];
	$sql = "delete from student where rollno = '$user' ";
	//echo $sql;
	if($conn->query($sql) === TRUE){
		session_destroy();
		header("refresh:5;url=index.php" );
  		echo '<h2>Your profile is deleted !</h2>';
  		echo 'You\'ll be redirected in about 5 secs. If not, click <a href="index.php">here</a>.';

	}
	else{

		echo '<h2>Something went wrong..please try again</h2>';
		header("refresh:5;url=profile.php" );
  		echo 'You\'ll be redirected in about 5 secs. If not, click <a href="profile.php">here</a>.';
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
