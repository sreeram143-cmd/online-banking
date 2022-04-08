<?php
session_start();
//to continue the current session
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
  	<h1>  &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp;  BANKING MANAGEMENT SYSTEM </h1>
    <a href="employeelogin.html"> Logout </a>
  </div>

  <div class="dropdown">
  <button class="dropbtn">Account</button>
  <div class="dropdown-content">
    <a href="empviewprofile.php">View Profile</a>
    <a href="empupdateprofile.php">Update Profile</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Approval</button>
  <div class="dropdown-content">
    <a href="approveatm.php">ATM Requests</a>
    <a href="approvecheque.php">Cheque Book Requests</a>
  </div>
</div>
</div><br/><br/>
<h3>&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp; Welcome to the System!</h3>