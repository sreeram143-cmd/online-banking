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
        h2{
            text-align: center;
        }
        table{
            border: 2px solid black;
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
    <a href="#">Cheque Book Requests</a>
  </div>
</div>
</div><br/><br/>
<strong><h2>ATM Requests</h2></strong>
<br>
<form method="post" action="approvecheque2.php">
<table width="100%" align="center"  cellpadding="10"><tr><strong><td>Request ID</td><td>Name</td><td>Account Number</td>
<td>No of Leaves</td><td>Mode of Delivery</td><td>Approve</td></strong></tr>

<?php
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
$app="n";
//displaying requests
$sql="select * from chequerequests where approved='$app'";
$result=mysqli_query($con,$sql);
if ($result)
{
    while ($row=mysqli_fetch_array($result))
    {
        echo "<tr><td> ". $row['requestid']." </td><td> " . $row['holdername'] ." </td><td> " . $row['accountno'] ." </td>";
        echo "<td> " . $row['leaves'] ." </td><td> " . $row['delivery'] ." </td><td> <input type=submit name=rid value=" . $row['requestid'] ."> </td></tr>"; 
    }
    echo "</table><form>";
    echo "<h3><a href=emphome.php> HomePage</a></h3>";
}else {
    echo "Error".$con->error;
    echo "<script>setTimeout(\"location.href = 'emphome.php';\",1500);</script>";
}


?>