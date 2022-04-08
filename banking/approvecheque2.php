<?php
session_start();
//credentials
$host="localhost"; 
$username="root"; 
$password="Sreeram@16"; 
$db_name="banking"; 
//creating connection with database
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if (!$con)
{
	die("cannot connect");
}
//request id
$rid=$_POST['rid'];

$app="y";

$sql="update chequerequests set approved='$app' where requestid='$rid'";
$result=mysqli_query($con,$sql);
if ($result)
{
    header("Location:approvecheque.php");
}else{
    echo "Error".$con->error;
    echo "<script>setTimeout(\"location.href = 'emphome.php';\",1500);</script>";
}

?>