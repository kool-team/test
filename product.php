<?php
    include 'connect.php';

    if(isset($_POST['prod_name'])){
        $prod_name = $_POST['prod_name'];
        $sql = "SELECT id FROM product WHERE name = '$prod_name'";
        $rseult = mysqli_query($con,$sql);
        $row2 = mysqli_fetch_array($rseult);
    }
?>