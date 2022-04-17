<?php
    session_start();
    include 'connect.php';
    include 'home.php';

    //add user_id to shopping_sessions
    $user_id = (int)$_SESSION['id'];
    $sql = "INSERT INTO shopping_sessions (user_id) VALUES($user_id)";
    $rseult = mysqli_query($con,$sql);

    // add items to cart_item
    $sql = "SELECT id FROM shopping_sessions WHERE user_id = $user_id";
    $rseult = mysqli_query($con,$sql);
    $row1 = mysqli_fetch_array($rseult);

    $var1 = $row1['id'];

    $sql = "INSERT INTO cart_item (session_id,product_id) VALUES ($var1,$var2)";
    $rseult = mysqli_query($con,$sql);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
    <body>

    </body>
</html>