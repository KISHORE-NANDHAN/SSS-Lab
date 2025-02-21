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
    var_dump($_POST);

    $Rollno = $_POST['reg'];
    $name = $_POST['name'];
    $gender = $_POST['gen'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];
    
    $sql = "Insert into registration Values('$Rollno','$name','$gender','$dob','$course');";
    if(mysqli_query($conn,$sql)){
        echo "<h1><center>Data Inserted Successfully </center></h1>";
    }else{
        echo "Error creating database".mysql_error($conn);
    }

?>
