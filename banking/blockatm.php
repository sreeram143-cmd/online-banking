<?php
session_start();
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
  	<h1> &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp;  BANKING MANAGEMENT SYSTEM </h1>
    <a href="login.html"> Logout </a>
  </div>

  <div class="dropdown">
  <button class="dropbtn">Account</button>
  <div class="dropdown-content">
    <a href="transfermoney.php">Transfer Money</a>
    <a href="previoustransactions.php">View Previous Transactions</a>
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
	<a href="">Block ATM</a>
	<a href="changepin.php">Change ATM pin</a>
  </div>
</div>
</div><br/><br/>
<form method="post" action="blockatm2.php">
<table bgcolor='#006666' align=center border='1' bordercolor='#006666'>
<tr><td align=center colspan=3><strong><h2> Block ATM</h2></strong></td></tr>
<tr><td>Card number</td><td>:</td><td><input type="text" name="cardno"></td></tr>
<tr><td>Name on Card</td><td>:</td><td><input Type="text" name="name"></td></tr>
<tr><td>CVV</td><td>:</td><td><input type="text" name="cvv"></td></tr>
<tr><td>PIN</td><td>:</td><td><input type="text" name="pin"></td></tr>
<tr><td colspan="3" align="center"><input type="submit" name="submit" value="block"></td></tr>
<tr><td><a href=homepage.php>HomePage</a></td></tr>
</table>
</form>
</body>
</html>
