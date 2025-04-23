<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbase = "exp";

    $conn = mysqli_connect($servername,$username,$password,$dbase);
    if(!$conn){
        die("Connection Failed :".mysqli_error($conn));
    }
?>