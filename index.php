<?php
session_start();
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    
        username <input type="text"  name="username"> <br>
        password <input type="password" name="password"><br>
        nom <input type="text" name="first_name"><br>
        prenom <input type="text" name="last_name"><br>
        telephone <input type="text" name="telephone"><br>
        adress <input type="email" name="address"><br>
    <button type="submit" name="send">send</button>
    </form>
    <?php

    if(isset($_POST['send'])){
        $username =$_POST['username'];
        $password =$_POST['password'];
        $first_name =$_POST['first_name'];
        $last_name =$_POST['last_name'];
        $telephone =$_POST['telephone'];
        $address =$_POST['address'];
        $sql = "INSERT INTO users (username,password,first_name,last_name,address,telephone) VALUES('$username','$password','$first_name','$last_name','$telephone','$address')";
        $result = mysqli_query($con,$sql);

        if($result){
            $sql = "SELECT id FROM users WHERE username = '$username'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $_SESSION['id'] = $row['id'];

            //add user_id to shopping_sessions
            $user_id = $row['id'];
            $sql = "INSERT INTO shopping_sessions (user_id) VALUES($user_id)";
            $rseult = mysqli_query($con,$sql);

            
            $sql = "SELECT id FROM shopping_sessions WHERE user_id = $user_id";
            $rseult = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($rseult);
            $_SESSION['session_id'] = $row['id'];
            
            header('location:home.php');
        }else {
            echo 'database connection failled';
        }
    }
    ?>
</body>
</html>