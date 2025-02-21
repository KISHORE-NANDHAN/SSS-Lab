<?php
    $servername = "localhost"; //local server name default localhost.
    $username = "root"; //mysql username default is root.
    $password = ""; //blank if no password is set for mysql.
    $dbase = "LBRCE"; //using LBRCE Database

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbase);
    //check connection

    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }

    $sql = "SELECT * FROM registration";
    if(mysqli_query($conn,$sql)){
        var_dump(mysqli_query($conn,$sql));
    }else{
        echo "Error creating database".mysqli_error($conn);
    }

?>
