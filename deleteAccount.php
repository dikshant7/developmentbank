<?php
$delete=false;
session_start();
include 'partials/_dbconnect.php';
$owner=$_SESSION['userid'];//user id of owner of account
$sql="DELETE FROM `user` WHERE `user`.`userid` = $owner";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "account deleted";
    session_unset();
    session_destroy();
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php require 'partials/navbar.php'?>
    <h1>DELETE</h1>

</body>
</html>