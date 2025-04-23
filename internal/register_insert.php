<?php
    include 'links.html';
    if(isset($_POST['submit'])){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbase = "internal";

        $conn = mysqli_connect($servername,$username,$password,$dbase);
        if(!$conn){
            die("Connection Failed :".mysqli_error($conn));
        }else{
            echo "database connected successfully";
        }

        $name = $_POST['uname'];
        $dept = $_POST['dept'];
        $salary = $_POST['salary'];
        $contact = $_POST['phone'];

        $sql = "INSERT INTO employee(Name,Department,Salary,Contact) values(?,?,?,?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssii",$name,$dept,$salary,$contact);

        if($stmt->execute()){
            echo "Data Inserted Successfully";
        }else{
            echo "Insertion failed".mysqli_error($conn);
        }

    }