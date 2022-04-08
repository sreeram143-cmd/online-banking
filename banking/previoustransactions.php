<?php
session_start();
//account number
$accno=$_SESSION['acc'];
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
$row;

$sql1="select * from account where accountno='$accno'";
$result=mysqli_query($con,$sql1);
$row=mysqli_fetch_array($result);
$name=$row['holdername'];
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			margin:0;
			font-family: Arial,Helvetica,sans-serif;
			background-color:#666699;
			color:white;
		}

		.topnav{
			overflow:hidden;
			text-align:right;
		}

		.topnav h1{
			float:left;
			color:#f2f2f2;
			text-align:center;
			padding:8px 16px;
			text-decoration:none;
			font-size:40px;
		}

		.topnav a{
			float:right;
			color:#f2f2f2;
			text-align:center;
			padding:35px 25px;
			text-decoration:none;
			font-size:20px;
		}

		.topnav a:hover{
			background-color:#04AA6D;
			color:black;
		}

		.topnav a.active{
			background-color:#04AA6D;
			color:white;
		}


		.active,.dot:hover{
			background-color:#717171;
		}

		q{font-style:italic;}

		.author{color:cornflowblue;}

		h1{
			text-align: center;
		}

		.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
table{
    border: 2px solid black;
}
#h{
    font-weight: bold;

}
h2{
    text-align: center;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}



	</style>
	<body>
		<div>
  <div class="topnav">
  	<h1> &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp;  BANKING MANAGEMENT SYSTEM </h1>
    <a href="login.html"> Logout </a>
  </div>

  <div class="dropdown">
  <button class="dropbtn">Account</button>
  <div class="dropdown-content">
    <a href="transfermoney.php">Transfer Money</a>
    <a href="">View Previous Transactions</a>
    <a href="balance.php">Check Balance</a>
	<a href="chequebookapply.php">Apply Chequebook</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Profile</button>
  <div class="dropdown-content">
    <a href="viewprofile.php">View Profile</a>
    <a href="updateprofile.php">Modify Profile</a>
    <a href="changepassword.php">Change Password</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">ATM</button>
  <div class="dropdown-content">
    <a href="atmapply.php">Apply ATM</a>
	<a href="blockatm.php">Block ATM</a>
	<a href="changepin.php">Change ATM pin</a>
  </div>
</div>
</div><br/><br/>
<strong><h2> Previous Transactions</h2></strong>
<br>
<h3>Account Number : <?php echo $accno?><br>
Account Holder Name: <?php echo $name?><br>
<table width="100%" align="center"  cellpadding="10"><tr><strong><td>Transaction ID</td><td>Sender</td><td>Sender account number</td>
<td>Recipient</td><td>Recipient account number</td><td>Amount</td><td>Time</td></strong></tr>

<?php


$sql="select * from transaction where senderaccountno='$accno' or recipientaccountno='$accno'";
$result=mysqli_query($con,$sql);
if ($result)
{
    while ($row=mysqli_fetch_array($result))
    {
        echo "<tr><td> ". $row['transactionid']." </td><td> " . $row['sender'] ." </td><td> " . $row['senderaccountno'] ." </td>";
        echo "<td> " . $row['recipient'] ." </td><td> " . $row['recipientaccountno'] ." </td><td> " . $row['amount'] ." </td><td> " . $row['time'] ." </td></tr>"; 
    }
    echo "</table>";
    echo "<h3><a href=homepage.php> HomePage</a></h3>";
}else {
    echo "Error".$con->error;
    echo "<script>setTimeout(\"location.href = 'homepage.php';\",1500);</script>";
}