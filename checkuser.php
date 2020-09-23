<?php
    session_start();
    include('connect.php');
                
        $rollno=$_POST['rollno'];
        $pwd = $_POST['pwd'];
        $pwd = md5($pwd);

        $sql="select * from student where rollno ='$rollno' and pwd='$pwd'";
        //echo $sql;
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
            $_SESSION['user']= $rollno;
            $_SESSION['role']="student";
            echo 'true';
        }
        else{
            echo 'false';
        }
        mysqli_close($conn);        
    
?>