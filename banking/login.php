
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

$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
	die("cannot connect");
}
$uid=$_POST['userid'];
$pass=$_POST['password'];
//searching for the user id
$sql=" select * from user where userid='$uid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
//checking password
if ($row['password']==$pass)
{
	$_SESSION['id']=$uid;
	$_SESSION['acc']=$row['accountno'];
	//saving details to current session
	header("Location:homepage.php");
	//takes to the homepage
} else {
	echo "Incorrect username or password";
	echo "<script>setTimeout(\"location.href = 'login.html';\",3000);</script>";
	//takes to the location after countdown
}
mysqli_close($con);
?>
</body>
</html>