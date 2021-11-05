
<?php
include 'partials/_dbconnect.php';
session_start();// isset checks if variable is set or not
$success=false;
$invalidAmount=false;
        if($_SERVER["REQUEST_METHOD"]=="POST")
            {
        $owner=$_SESSION['userid'];//user id of owner of account
        $amount=$_POST["amount"];// amount to be added
        $sql3="SELECT * FROM `user` WHERE `userid`='$owner'";
                $result3=mysqli_query($conn,$sql3);
                $row3 = mysqli_fetch_assoc($result3);
                $currbalance3= $row3['balance'] ;//current balance of owner
                $newbalance=$currbalance3+$amount;//new balance of user
                if($newbalance<=100000000&&$amount>=1)
                {
                    $sql="UPDATE `user` SET `balance` = '$newbalance' WHERE `user`.`userid` = $owner;";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                            $success=true;
                        }
                }
                else{
                   $invalidAmount=true;
                }
            }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/addmoney.css">
    <title>Deposit Money</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php require 'partials/navbar.php'?>
    <div class=main-body>
<div class="container">
    <?php
            if($success)
            {
                echo '<div class="alert">
                <center><b>Money Deposited Succesfully!!</b></center>
            </div>';
            }
            else if($invalidAmount)
            {
                echo '<div class="alert">
                <center><b>Invalid Amount</b></center>
            </div>';
            }
    ?>
    <div class="title">Deposit Money</div>
        <div class="content">
            <form action="addmoney.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Enter your USER ID </span>
                        <input class="input" type="amount" name="amount" id="amount" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Amount</span>
                        <input class="input" type="text" type="text" name="amount" id="amount" required>
                    </div>
                    <button class="submit" type="submit">SUBMIT</button>
                </div>
            </form>
        </div>
</div>
        </div>
</body>
</html>