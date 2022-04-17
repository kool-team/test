<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p class="prod_name">burger</p>
    <p id="show"></p>
    <button>Add to card</button>

    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $("button").on("click",function(){
                $.ajax ({
                    method: "POST",
                    url: "product.php",
                    data: {prod_name: "burger"},
                    beforeSend: function(xhr){

                    },
                    success: function(data,status,xhr){
                        // $('#show').html(data);
                        console.log(data)
                    },
                    error: function(xhr, status, error){

                    },
                    complete: function(xhr, status){

                    }
                })
            })
        })
    </script>
</body>
</html>
