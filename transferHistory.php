<?php
    include 'partials/_dbconnect.php';
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
    <link rel="stylesheet" type="text/css" href="css/allusers.css">
    
    <title>Transfer history</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php require 'partials/navbar.php'?>
<div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transfer History</h2>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
            <thead style="color : black;">
                <tr>
                    <th class="text-center">Beneficiary User ID</th>
                    <th class="text-center">Amount Transfered</th>
                    <th class="text-center">Balance</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $userid=$_SESSION['userid'];
                    $sql ="SELECT * FROM `tranferhistory` WHERE `owner`='$userid'";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <td class="py-2"><?php echo $row['buserid'] ;?></td>
                            <td class="py-2"><?php echo $row['amount'] ;?></td>
                            <td class="py-2"><?php echo $row['balance'] ;?></td>
                        </tr>
                    <?php
                        }
                    ?>
        </tbody>
    </table>
                    </div>
    <h2 class="text-center pt-4" style="color : black;">Received History</h2>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
            <thead style="color : black;">
                <tr>
                    <th class="text-center">Received From</th>
                    <th class="text-center">Amount Received</th>
                </tr>
            </thead>
            <tbody>
    <?php
            include 'partials/_dbconnect.php';
            $userid=$_SESSION['userid'];
            $sql1 ="SELECT * FROM `recivedmoney` WHERE `userid`='$userid';";
            $r=mysqli_query($conn,$sql1);
            $num1=mysqli_num_rows($r);
            while($row = mysqli_fetch_assoc($r))
            {
            ?>
            <tr>
                <td class="py-2"><?php echo $row['recived from'];?></td>
                <td class="py-2"><?php echo $row['amount'];?></td>
            </tr>
            <?php
                }
            ?>
            </tbody>
    </table>
    </div>
</div>
</body>
</html>