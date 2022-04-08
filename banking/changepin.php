<?php
session_start();

?>
<html>
 
  <style type="text/css">
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
    button{
      background-color:black;
      padding:15px 30px;
      color:white;
      text-align:center;
      margin:4px 2px;
    }
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
  <script type="text/javascript">
    //function to validate pin
    function validatePin() {

      currentPassword=document.getElementById("currentPin").value;
      newPassword=document.getElementById("newPin").value;
      confirmPassword=document.getElementById("confirmPin").value;
      checkSame = false;

      if (test1(currentPin)){
        if (test2(newPin)){
          if (test3(confirmPin)){
            if (test4(checkSame)){
            return true;
            }
          }
        }
      }

      return false;
    }

    function test1(currentPin) {

      if(currentPin == "") {
        alert("Enter Current Pin");
        return false;
      }
      else{
        return true;
      }
    }

    function test2(newPin) {
      if(newPin == "") {
        alert("Enter New Pin");
        return false;
      }
      else{
        return true;
      }
    }

    function test3(confirmPin) {
      if(confirmPin == "") {
        alert("Enter Confirm Pin");
        return false;
      }
      else{
        return true;
      }
    }

    function test4(checkSame) {
      
      /*if(newPin != confirmPin) {
        alert("New and Confirm pin must be same");
        return false;
      }
      else if(newPin == confirmPin) {
        return true;
      }*/
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
    <a href="applyatm.php">Apply ATM</a>
	<a href="blockatm.php">Block ATM</a>
	<a href="">Change ATM pin</a>
  </div>
</div>
</div><br>
  <table bgcolor="#3d3d5c" align="center" border="0" cellspacing="0">
      <tr>
        <td>
    <form name="changepassword" method="post" action="changepin2.php" >
      <table  width="100%" align="center" border="0" cellpadding="10">

            <tr>
              <td align="center" colspan="3"><strong><h2> CHANGE PIN </h2></strong></td>
            </tr>
            <tr>
					<td> Card Number </td>
					<td>:</td>
					<td><input type="text" name="cardno"></td>
				</tr>
            <tr>
					<td> Name On Card </td>
					<td>:</td>
					<td><input type="text" name="name"></td>
			</tr>
            <tr>
              <td> Current PIN </td>
              <td>:</td>
              <td> <input type="password" id="currentPin" name="currentPin"></td>
            </tr>

            <tr>
              <td> New PIN </td>
              <td>:</td>
              <td> <input type="password" id="newPin" name="newPin"></td>
            </tr>

            <tr>
              <td> Confirm New PIN </td>
              <td>:</td>
              <td> <input type="password" id="confirmPin" name="confirmPin"></td>
            </tr>

            <tr>
              <td colspan="3" align="center"><button type="submit" value="submit" > Change </button> </td>
            </tr>
            <tr><td><a href=homepage.php>HomePage</a></td></tr>
          </table>
        </form>
      </td>
    </tr>
  </table>
</body>
</html>
