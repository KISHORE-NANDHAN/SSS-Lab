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

    $rollno = mysqli_real_escape_string($conn, $_POST['reg']);
    
    $sql = "DELETE FROM registration WHERE Rollno=?";

    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "s", $rollno);

    // Execute the statement
    if(mysqli_stmt_execute($stmt)) {
        echo "<h1>Record Deleted successfully.";
    } else {
        echo "Error Deleting record: " . mysqli_error($conn);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);

?>
