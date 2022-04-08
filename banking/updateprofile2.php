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
    $userid=$_SESSION['id'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    //updating in database
    $sql="update user set mobilenumber='$mobile',email='$email' where userid='$userid'";
    $result=mysqli_query($con,$sql);
    if ($result)
    {
        header("Location:homepage.php");
    }else {
        echo "Error".$con->error;
        echo "<script>setTimeout(\"location.href = 'homepage.php';\",1500);</script>"; 
    }

?>