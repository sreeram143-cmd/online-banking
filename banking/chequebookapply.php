<?php
session_start();
echo"<p><center></center></p>";

$row;
$con;
$acc=$_SESSION['acc'];

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
    //retreiving from mysql database
    $sql="select * from account where accountno='$acc'";
    $result=mysqli_query($con,$sql);
    $user=mysqli_fetch_array($result);
	$_SESSION['name']=$user['holdername'];
	$_SESSION['accno']=$user['accountno'];

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
    <a href="previoustransactions.php">View Previous Transactions</a>
    <a href="balance.php">Check Balance</a>
	<a href="">Apply Chequebook</a>
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
<br><br>
<form method="post" action="chequebookapply2.php">
<table bgcolor="#3d3d5c" align="center" border="0" cellspacing="0">
			<tr>
				<td>
			<table  width="100%" align="center" border="0" cellpadding="10">
				<tr>
					<td align="center" colspan="3"><strong><h2> Chequebook Request</h2></strong></td>
				</tr>
				<tr>
					<td> Account Number </td>
					<td>:</td>
					<td><?php echo $user['accountno']?></td>
				</tr>
				<tr>
					<td> Account Holder Name </td>
					<td>:</td>
					<td><?php echo $user['holdername']?></td>
				</tr>
				<tr>
                <tr>
					<td class = "select" id="no_of_leaves"> Number of Leaves </td>
					<td>:</td>
					<td>
                        <select name="leaves">
                        <option value = "25">25</option>
                        <option value = "50">50</option>
                        <option value = "100">100</option>
                    </select>
                    </td>
				</tr>
                <tr>
					<td class = "select" id="mode"> Mode Of Delivery </td>
					<td>:</td>
					<td>
                        <select name="delivery">
                        <option value = "Collect from Branch">Collect from Branch</option>
                        <option value = "Speed Post">Speed Post</option>
                        <option value = "Courier">Courier</option>
                    </select>
                    </td>
				</tr>
				<tr>   
					<td colspan="3" align="center"><button type="submit" value="Submit" > Submit </td>
				</tr>
			</table>
	</td>
</tr>
</table>
</form>


