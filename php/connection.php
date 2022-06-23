<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "instagram";

    $con=mysqli_connect($host,$user,$password,$dbname);

    if(!$con){
        die("Error: ".mysqli_connect_error());
    }
?>