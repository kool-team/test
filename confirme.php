<?php 
  include 'connect.php';
  session_start();


    if(isset($_POST['cart'])){
    $query = "SELECT * FROM cart_item";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($result)){
        $product_id =  $row['product_id'];
        $quantity = $row['quantity'];
        $query = "SELECT name,price FROM product WHERE id = $product_id";
        $result2 = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($result2);
        
    }

    }
?>