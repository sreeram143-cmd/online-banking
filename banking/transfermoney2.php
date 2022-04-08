<?php
session_start();
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

//account numbers
$accno=$_SESSION['acc'];
$raccno=$_SESSION['raccno'];
$amount=$_POST['amount'];

$lock="y";
$unlock="n";

$sql="select * from account where accountno='$accno'";
$result=mysqli_query($con,$sql);
$sender=mysqli_fetch_array($result);
//sender old balance
$balance=$sender['balance'];
$sendername=$sender['holdername'];
if ($balance>$amount)
{
    $sql1="select * from account where accountno='$raccno'";
    $result1=mysqli_query($con,$sql1);
    $rec=mysqli_fetch_array($result1);
    $recname=$rec['holdername'];
    if ($rec['aclock']=="n" and $sender['aclock']=="n")
    {
        //acquiring locks
        $sql2="update account set aclock ='$lock' where accountno='$raccno'";
        
        $sql7="update account set aclock='$lock' where accountno='$accno'";
        $result7=mysqli_query($con,$sql7);
        $result2=mysqli_query($con,$sql2);
        if ($result2 and $result7)
        {
            //old receiver balance
            $recbalance=$rec['balance'];
            //new balances
            $senderbalance=$balance-$amount;
            $newrecbalance=$recbalance + $amount;
            //updating balance and releasing locks
            $sql3="update account set balance='$newrecbalance',aclock='$unlock' where accountno='$raccno'";
            $sql4="update account set balance='$senderbalance',aclock='$unlock' where accountno='$accno'";
            $result3=mysqli_query($con,$sql3);
            $result4=mysqli_query($con,$sql4);
            if ($result3 and $result4)
            {
                $tid="TRID2021".rand(000001,999999);
                $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
                $ttime= $date->format('d-m-Y H:i:s');
                $sql8="insert into transaction(transactionid,sender,senderaccountno,recipient,recipientaccountno,amount,time) 
                values('$tid','$sendername','$accno','$recname','$raccno','$amount','$ttime')";
                $result8=mysqli_query($con,$sql8);
                if ($result8)
                {
                    header("Location:homepage.php");
                }else {
                    echo "Error".$con->error;
                    echo "<script>setTimeout(\"location.href = 'homepage.php';\",1500);</script>";
                }
            }else {
                //if transaction failed, restoring balances
                echo "Error".$con->error;
                echo "<script>setTimeout(\"location.href = 'homepage.php';\",1500);</script>";
                $sql5="update account set balance='$recbalance',aclock='$unlock' where accountno='$raccno'";
                $sql6="update account set balance='$balance',aclock='$unlock' where accountno='$accno'";
                $result5=mysqli_query($con,$sql5);
                $result6=mysqli_query($con,$sql6);
            }
        }else {
            echo "Error".$con->error;
            echo "<script>setTimeout(\"location.href = 'homepage.php';\",1500);</script>";
        }
    }else {
        //wait for 5 secs before checking locks again
        sleep(5);
        transferAmount();
    }
}else {
    echo "Insufficient funds";
    echo "<script>setTimeout(\"location.href = 'homepage.php';\",1500);</script>"; 
}
?>