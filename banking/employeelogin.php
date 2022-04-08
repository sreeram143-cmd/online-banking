
<?php
session_start();
?>
<html>
<body>
<?php
//credentials
$host="localhost"; 
$username="root"; 
$password="Sreeram@16"; 
$db_name="banking"; 
//creating connection
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
	die("cannot connect");
}
$eid=$_POST['empid'];
$pass=$_POST['password'];
//searching for employee id
$sql=" select * from employee where empid='$eid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
//checking password
if ($row['password']==$pass)
{
	$_SESSION['empid']=$eid;
	//saving id to session
	header("Location:emphome.php");
} else {
	echo "Incorrect username or password";
	echo "<script>setTimeout(\"location.href = 'employeelogin.html';\",3000);</script>";
}
mysqli_close($con);
?>
</body>
</html>