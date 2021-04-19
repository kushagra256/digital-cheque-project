<?php      
    include('loginconnection.php');  
    $username = $_POST['uniqueid'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
        $sql = "SELECT uniqueid,password,emailid,accountno FROM signin WHERE(uniqueid='$username',password='$password')";
        
           $result = $con->query($sql);

           
                while($row = $result->fetch_assoc())
                {
                   echo "uniqueid: " . $row["uniqueid"]. "password: " . $row["password"]."emailid:". $row["emailid"]."accountno".$row["accountno"]."<br>";
                }
            
       
?>  