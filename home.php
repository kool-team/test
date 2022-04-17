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
    <span id="temp" class="value" style="display: none"></span>
    <div class="container">
        <h1>PIZZA HUT SMALL</h1>
        <div class="product" >
        <img src="" class="img-thumbnail">       
        <button class="btn btn-primary" onclick="f(1)" name="product" value="prod1">
        Add To card
    </button>
        </div>
        <h1>burger</h1>
        <div class="product" class="img-thumbnail">
        <img src="" >       
        <button class="btn btn-primary" onclick="f(2)"value="burger">
        Add To card
    </button>
        </div>
        <button class="btn btn-danger"><a href="card.php">View Card</a></button>
        </div>
        <script>
            function f(a){
              document.getElementById('temp').innerHTML = a;
              return;
            }
            
        </script>
        <?php
          $var2 = "<script>document.getElementById('temp').innerHTML;</script>";
          echo $var2;
        ?>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $("button").on("click",function(){
                $.ajax ({
                    method: "POST",
                    url: "product.php",
                    data: {prod_name: document.getElementById('temp').innerHTML},
                    beforeSend: function(xhr){

                    },
                    success: function(data,status,xhr){
                        // $('#show').html(data);
                        console.log(data);
                    },
                    error: function(xhr, status, error){

                    },
                    complete: function(xhr, status){

                    }
                })
            })
        })
    </script> -->

    </div>
  </body>
</html>