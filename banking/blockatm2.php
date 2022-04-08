<?php
session_start();
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

$cardno=$_POST['cardno'];
$name=$_POST['name'];
$cvv=$_POST['cvv'];
$pin=$_POST['pin'];
$block="y";

$sql="update atm set block='$block' where cardno='$cardno' and name='$name' and cvv='$cvv' and pin='$pin'";
$result=mysqli_query($con,$sql);
if ($result)
{
    header("Location:homepage.php");
}else {
    echo "Error".$con->error;
    echo "<script>setTimeout(\"location.href = 'homepage.php';\",1500);</script>";
}
?>