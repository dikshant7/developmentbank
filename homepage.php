<?php
    session_start();// isset checks if variable is set or not
    if(!isset($_SESSION['loggedin']) ||$_SESSION['loggedin']!=true){
        header("location:index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/homepage.css">
    <title>Homepage</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
 <?php require 'partials/navbar.php'?>
 <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #82E0AA;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h2>Welcome to</h2>
                  <h1>Development Bank</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="images/bank.png" class="img-fluid pt-2">
              </div>
            </div>
          <br>
      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                  <img src="images/user1.jpeg" class="img-fluid">
                    <br> <br>
                    <a href="allusers.php"><button style="background-color : #2785C4;">Registered Users</button></a>
                  </div>
                  <div class="col-md act">
                  <img src="images/transaction.png" class="img-fluid">
                    <br><br>
                    <a href="transferMoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                  <img src="images/history.jpg" class="img-fluid">
                    <br><br>
                    <a href="transferHistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
                  <div class="col-md act">
                  <img src="images/deposit.jpg" class="img-fluid">
                    <br><br>
                    <a href="addmoney.php"><button style="background-color : #2785C4;">Deposit Money</button></a>
                  </div>
            </div>
      </div>
</body>
</html>
