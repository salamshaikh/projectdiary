<?php
    session_start();
    include('connect.php');
                
        $femail=$_POST['femail'];
        $fpwd = $_POST['fpwd'];
        $fpwd = md5($fpwd);

        $sql="select * from faculty where femail='$femail' and fpwd='$fpwd'";
        //echo $sql;
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
            $_SESSION['user']=$femail;
            $_SESSION['role']="faculty";
            echo 'true';
        }
        else{
            echo 'false';
        }
        mysqli_close($conn);        
    
?>