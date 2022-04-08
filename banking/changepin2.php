<?php
session_start();

$acc=$_SESSION['acc'];
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
$currentpin=$_POST['currentPin'];
$newpin=$_POST['newPin'];

//changing pin
$sql="select * from atm where cardno='$cardno' and name='$name'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
if ($currentpin==$row['pin'])
{
    $sql1="update atm set pin='$newpin' where cardno='$cardno' and name='$name'";
      $result1=mysqli_query($con,$sql1);
      if ($result1)
      {
        header("Location:homepage.php");
      }else {
        echo "Error".$con->error;
        echo "<script>setTimeout(\"location.href = 'homepage.php';\",1500);</script>";
      }
}else{
    echo "Incorrect pin";
    echo "<script>setTimeout(\"location.href = 'changepin.php';\",1500);</script>";
}

?>