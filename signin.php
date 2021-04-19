<?php      
    include('signinconnection.php');  
    $username = $_POST['uniqueid'];  
    $password = $_POST['password'];  
    $emailid = $_POST['emailid'];  
    $accountno = $_POST['accountno'];  
      
        
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $emailid = stripcslashes($emailid);  
        $accountno = stripcslashes($accountno);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
        $emailid = mysqli_real_escape_string($con, $emailid);  
        $accountno = mysqli_real_escape_string($con, $accountno);  
        $sql = "INSERT INTO signin (uniqueid,password,emailid,accountno) values('$username','$password','$emailid','$accountno')";
        if($con->query($sql))
        {
           echo"New record is inserted";
        }
        else
        {
           echo "error";
        }
?>  