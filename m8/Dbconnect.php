<?php
    $servername = "localhost"; //local server name default localhost.
    $username = "root"; //mysql username default is root.
    $password = ""; //blank if no password is set for mysql.

    //create connection
    $conn = mysqli_connect($servername, $username, $password);
    //check connection

    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }else{
        $sql = "CREATE DATABASE LBRCE"; //to drop a database use DROP DATABASE Database_name
        if(mysqli_query($conn,$sql)){
            echo "<h1><center>Database Created Successfully </center></h1>";
        }else{
            echo "Error creating database".mysql_error($conn);
        }
    }
?> 