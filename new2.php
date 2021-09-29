<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "baza";
    $conn = new mysqli($servername, $username, $password, $database);
    $code=$_POST['value'];
    $sql="SELECT * FROM tabela WHERE code='".$code."'";
    $rs=mysqli_query($conn,$sql);
    if(mysqli_num_rows($rs)>=1)
    {
        include('error.html');
        die();
    }else{
        http_response_code(404);
        include('error.html');
        die();

}

