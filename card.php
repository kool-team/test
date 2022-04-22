<?php 
  include 'connect.php';
  session_start();

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
    <style>
      .container {
        width: 900px;
        margin: 20px auto;
        display: flex;
        justify-content: space-between;
      }
      .container div{
        width : 10rem;
        height : 100px;
        background-color : #EEE;
      }
    </style>
  </head>
  
    <body>
    <?php 
    $query = "SELECT * FROM cart_item";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($result)){
        $product_id =  $row['product_id'];
        $quantity = $row['quantity'];
        $query = "SELECT name,price FROM product WHERE id = $product_id";
        $result2 = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($result2);
        echo '<div class="container">
        <div>'.$row['name'].'</div>
        <div>'.$quantity.'</div>
        <div>'.$quantity*$row['price'].'</div>
        </div>';
    }
  ?>
    <form action="confrime.php" method="post" style="width : 500px ;margin : auto;">
      cart: <input type="text" name="cart" ><br><br>
      <button class="btn btn-primary" name="confirm-btn" type="submit">confirmer</button>
    </form>

    </body>
</html>