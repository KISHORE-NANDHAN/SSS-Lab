<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbase = "internal";

    $conn = mysqli_connect($servername,$username,$password,$dbase);
    if(!$conn){
        die("Connection Failed :".mysqli_error($conn));
    }
?>