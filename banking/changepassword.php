<?php
session_start();
$row;
$con;

?>
<html>

  <style type="text/css">
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
    body{
      background-color:#666699;
      color:white;
    }
    form{
      padding-top:100;
    }
    #reg{
      text-align:center;
      padding-left:200;
    }
    img{
      padding-left:350px;
    }
    h1,h2,p{
      text-align:center;
    }
    a{
    
      font-size:20px;
    }
    a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color:#e0e0eb;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
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
    button{
      background-color:black;
      padding:15px 30px;
      color:white;
      text-align:center;
      margin:4px 2px;
    }
    
  </style>
  <script type="text/javascript">
    //function to validate password
    function validatePassword() {

      currentPassword=document.getElementById("currentPassword").value;
      newPassword=document.getElementById("newPassword").value;
      confirmPassword=document.getElementById("confirmPassword").value;
      checkSame = false;

      if (test1(currentPassword)){
        if (test2(newPassword)){
          if (test3(confirmPassword)){
            if (test4(checkSame)){
            return true;
            }
          }
        }
      }

      return false;
    }

    function test1(currentPassword) {

      if(currentPassword == "") {
        alert("Enter Current Password");
        return false;
      }
      else{
        return true;
      }
    }

    function test2(newPassword) {
      if(newPassword == "") {
        alert("Enter New Password");
        return false;
      }
      else{
        return true;
      }
    }

    function test3(confirmPassword) {
      if(confirmPassword == "") {
        alert("Enter Confirm Password");
        return false;
      }
      else{
        return true;
      }
    }

    function test4(checkSame) {
      if(newPassword != confirmPassword) {
        alert("New and Confirm password must be same");
        return false;
      }
      else if(newPassword = confirmPassword) {
        return true;
      }
    }
  </script>
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
    <a href="checkbalance.php">Check Balance</a>
	<a href="chequebookapply.php">Apply Chequebook</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Profile</button>
  <div class="dropdown-content">
    <a href="viewprofile.php">View Profile</a>
    <a href="updateprofile.php">Modify Profile</a>
    <a href="">Change Password</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">ATM</button>
  <div class="dropdown-content">
    <a href="applyatm.php">Apply ATM</a>
	<a href="blockatm.php">Block ATM</a>
	<a href="changepin.php">Change ATM pin</a>
  </div>
</div>
</div><br/><br/>
  <table bgcolor="#3d3d5c" align="center" border="0" cellspacing="0">
      <tr>
        <td>
    <form name="changepassword" method="post" action="changepassword2.php" onsubmit="return validatePassword()">
      <table  width="100%" align="center" border="0" cellpadding="10">

            <tr>
              <td align="center" colspan="3"><strong><h2> CHANGE PASSWORD </h2></strong></td>
            </tr>

            <tr>
              <td> Current Password </td>
              <td>:</td>
              <td> <input type="password" id="currentPassword" name="currentPassword"></td>
            </tr>

            <tr>
              <td> New Password </td>
              <td>:</td>
              <td> <input type="password" id="newPassword" name="newPassword"></td>
            </tr>

            <tr>
              <td> Confirm New Password </td>
              <td>:</td>
              <td> <input type="password" id="confirmPassword" name="confirmPassword"></td>
            </tr>

            <tr>
              <td colspan="3" align="center"><button type="submit" value="submit" onclick="return validatePassword();"> Change </button> </td>
            </tr>
            <tr><td><a href=homepage.php>HomePage</a></td></tr>
          </table>
        </form>
      </td>
    </tr>
  </table>
</body>
</html>