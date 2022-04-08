<?php
session_start();

$userid=$_SESSION['id'];
//credentials
$host="localhost"; 
$username="root"; 
$password="Sreeram@16"; 
$db_name="banking"; 
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if (!$con)
{
  die("cannot connect");
}
$oldpassword=$_POST['currentPassword'];
$newpassword=$_POST['newPassword'];
$sql="select * from user where userid='$userid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
if ($oldpassword==$row['password'])
{
    $sql1="update user set password='$newpassword' where userid='$userid'";
      $result1=mysqli_query($con,$sql1);
      if ($result)
      {
        header("Location:homepage.php");
      }else {
        echo "Error".$con->error;
        echo "<script>setTimeout(\"location.href = 'homepage.php';\",1500);</script>";
      }
}else{
    echo "Incorrect password";
    echo "<script>setTimeout(\"location.href = 'changepassword.php';\",1500);</script>";
}

?>