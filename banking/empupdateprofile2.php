<?php
session_start();

$host="localhost"; 
    $username="root"; 
    $password="Sreeram@16"; 
    $db_name="banking"; 
    //creating connection
    $con = mysqli_connect("$host", "$username", "$password", $db_name);
    if (!$con)
    {
        die("cannot connect");
    }
    //taking inputs from form
    $empid=$_SESSION['empid'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    //updating in database
    $sql="update employee set mobile='$mobile',email='$email' where empid='$empid'";
    $result=mysqli_query($con,$sql);
    if ($result)
    {
        header("Location:emphome.php");
    }else {
        echo "Error".$con->error;
        echo "<script>setTimeout(\"location.href = 'emphome.php';\",1500);</script>"; 
    }

?>