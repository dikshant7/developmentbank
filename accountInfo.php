
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/allusers.css">
    <title>Account information</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php require 'partials/navbar.php'?>
<div class="container">
    <h2 class="text-center pt-4" style="color : black;">Registered Users</h2>
    <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <tbody>
            <?php
                session_start();
                include 'partials/_dbconnect.php';
                $owner=$_SESSION['userid'];//user id of owner of account
                $sql="SELECT * FROM `user` WHERE `userid`='$owner'";
                $result=mysqli_query($conn,$sql);
                $num=mysqli_num_rows($result);
                if($row = mysqli_fetch_assoc($result))
                {
                    ?>
                    <tr>
                            <th class="text-center">User Id</th>
                            <td class="py-2"><?php echo $row['userid'];?></td>
                        </tr>
                        <tr>
                            <th class="text-center">First Name</th>
                            <td class="py-2"><?php echo $row['firstname'];?></td>
                        </tr>
                        <tr>
                            <th class="text-center">Last Name</th>
                            <td class="py-2"><?php echo $row['lastname'];?></td>
                        </tr>
                        <tr>
                            <th class="text-center">Age</th>
                            <td class="py-2"><?php echo $row['age'];?></td>
                        </tr>
                        <tr>
                            <th class="text-center">Gender</th>
                            <td class="py-2"><?php echo $row['gender'];?></td>
                        </tr>
                        <tr>
                            <th class="text-center">Phone</th>
                            <td class="py-2"><?php echo $row['phone'];?></td>
                        </tr>
                        <tr>
                            <th class="text-center">Email</th>   
                            <td class="py-2"><?php echo $row['email'];?></td>
                        </tr>
                            <th class="text-center">City</th>
                            <td class="py-2"><?php echo $row['city'];?></td>
                        </tr>
                        <tr>
                            <th class="text-center">Balance</th>
                            <td class="py-2"><?php echo $row['balance'];?></td>
                        </tr>
                        <?php
                            }
                            else{
                                echo "unexpected error";
                            }
                    ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>