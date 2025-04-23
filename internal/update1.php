<?php
    include 'links.html';
    include 'db.php';
    
    if(isset($_POST['submit'])){

        $id = (int)$_POST['id'];
        $name = $_POST['uname'];
        $dept = $_POST['dept'];
        $salary = (int)$_POST['salary'];
        $contact = (int)$_POST['phone'];
        
        var_dump($_POST);

        $sql = "UPDATE employee SET Name=?,Department=?,Salary=?,Contact=? where id=?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssiii",$name,$dept,$salary,$contact,$id);

        if($stmt->execute()){
            echo "Updated Successfully";
        }else{
            echo "Updation failed".mysqli_error($conn);
        }
    }
?>