<?php
    include 'links.html';
    include 'db.php';
    
    if(isset($_POST['submit'])){

        $id = (int)$_POST['id'];

        $sql = "DELETE FROM employee WHERE id = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$id);

        if($stmt->execute()){
            echo "Deleted Successfully";
        }else{
            echo "Deletion failed".mysqli_error($conn);
        }
    }
?>