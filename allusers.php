<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/allusers.css">
    <title>Registered users</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php require 'partials/navbar.php'?>
<div class="container">
        <h2 class="text-center pt-4" style="color : black;">Registered Users</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">User Id</th>
                <th class="text-center">First Name</th>
                <th class="text-center">Last Name</th>
                <th class="text-center">Age</th>
                <th class="text-center">Gender</th>
                <th class="text-center">E-Mail</th>
                <th class="text-center">City</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'partials/_dbconnect.php';
            $sql ="SELECT * FROM `user`";
            $result=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
            while($row = mysqli_fetch_assoc($result)){
                // echo var_dump($row);
                //echo $row['userid'] .  ". Hello ". $row['firstname'].$row['lastname'];
                ?>
                <tr>
                    <td class="py-2"><?php echo $row['userid'] ;?></td>
                    <td class="py-2"><?php echo $row['firstname'] ;?></td>
                    <td class="py-2"><?php echo $row['lastname'] ;?></td>
                    <td class="py-2"><?php echo $row['age'] ;?></td>
                    <td class="py-2"><?php echo $row['gender'] ;?></td>
                    <td class="py-2"><?php echo $row['email'] ;?></td>
                    <td class="py-2"><?php echo $row['city'] ;?></td>
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