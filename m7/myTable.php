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
    $sql = "CREATE TABLE login(uname VARCHAR(15) PRIMARY KEY,password VARCHAR(15) NOT NULL, emailID VARCHAR(20) NOT NULL, mobile INT(10) UNIQUE);";
    if(mysqli_query($conn,$sql)){
        echo "<h1><center>Login Table Created Successfully </center></h1>";
    }else{
        echo "Error creating database".mysql_error($conn);
    }
?> 