<?php

session_start();
//to continue the current session
$row;
$con;

//function to retreive profile details
function retreiveProfile($empid)
{
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
    $sql="select * from employee where empid='$empid'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    //displaying the details on the page
    if ($result)
    {
      echo "<table bgcolor='#006666' align=center border='1' bordercolor='#006666'><tr><td align=center colspan=3><strong><h2> EMPLOYEE Profile</h2></strong></td></tr>";
      echo "<tr><td>Employee ID</td><td>:</td><td>".$row['empid']."</td></tr>";
      echo "<tr><td>Mobile Number</td><td>:</td><td>".$row['mobile']."</td></tr>";
      echo "<tr><td>Email Id</td><td>:</td><td>".$row['email']."</td></tr>";
      echo "<tr><td><a href=emphome.php>HomePage</a></td></table>";
    }else {
        echo "Error".$con->error;
        echo "<script>setTimeout(\"location.href = 'empviewprofile.php';\",1500);</script>"; 
    }
    
}
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
    <a href="">View Profile</a>
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
<br><br>

<?php

$empid=$_SESSION['empid'];


retreiveProfile($empid);


?>