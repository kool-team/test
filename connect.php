
<?php
    $con = new mysqli('localhost','root','Omar@0674');
    $dbconfig = mysqli_select_db($con,'kool_db');

    if($dbconfig){
        //dataBase connected succeffly
    }
    else{
        echo '
        <div class="container">
            <div class="row">
                    <div class="col-md-8 mr-auto ml-auto text-center py-5 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title bg-danger text-white">DataBase connection Failed</h1>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        ';
    }
?>