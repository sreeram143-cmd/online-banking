<?php
session_start();
//credentials
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
$acc=$_SESSION['accno'];
$name=$_SESSION['name'];
$leaves=$_POST['leaves'];
$delivery=$_POST['delivery'];
$app="n";
$rid="CBRID2021".rand(0001,9999);
//inserting info into database
$sql="insert into chequerequests(accountno,requestid,holdername,leaves,delivery,approved) 
values('$acc','$rid','$name','$leaves','$delivery','$app')";
$result=mysqli_query($con,$sql);
if ($result)
{
    header("Location:homepage.php");
}else {
    echo "Error".$con->error;
    echo "<script>setTimeout(\"location.href = 'homepage.php';\",1500);</script>";
}
?>