<?php
    $servername = "localhost"; //local server name default localhost.
    $username = "root"; //mysql username default is root.
    $password = ""; //blank if no password is set for mysql.
    $dbase = "Doctor"; //using LBRCE Database

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbase);
    //check connection

    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }
    var_dump($_POST);

    $email = $_POST['email'];
    $name = $_POST['name'];
    $gender = $_POST['gen'];
    $dob = $_POST['dob'];
    $pwd = $_POST['pwd'];
    
    $sql = "Insert into registration(name,email,gender,dob,password) Values('$name','$email','$gender','$dob','$pwd');";
    if(mysqli_query($conn,$sql)){
        echo "<script>
                alert('Registration Successful');
                window.location.href = 'login.php'; // Redirect after the alert
              </script>";
        exit();
    }else{
        echo "Error creating database".mysql_error($conn);
    }

?>
