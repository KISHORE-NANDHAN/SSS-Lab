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
    $sql = "CREATE TABLE login(Rollno VARCHAR(15) PRIMARY KEY,Name VARCHAR(25) NOT NULL, Gender VARCHAR(15) NOT NULL, DOB Date, Course VARCHAR(20) );";
    if(mysqli_query($conn,$sql)){
        echo "<h1><center>Login Table Created Successfully </center></h1>";
    }else{
        echo "Error creating database".mysql_error($conn);
    }
?> 