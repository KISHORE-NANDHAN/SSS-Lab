<?php
    include 'links.html';
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

    $rollno = $_POST['reg'];
    $name = $_POST['name'];
    $gender = $_POST['gen'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];
    
    $sql = "UPDATE registration SET Name=?, Gender=?, DOB=?, Course=? WHERE Rollno=?";

    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, $sql);

    // Assuming $name, $gender, $dob, $course, and $rollno are already defined variables
    mysqli_stmt_bind_param($stmt, "sssss", $name, $gender, $dob, $course, $rollno);

    // Execute the statement
    if(mysqli_stmt_execute($stmt)) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);

?>
