<html>
    <body>
        <form action="update.php" name="update" method="post">
            <input type="number" name="id" required/>
            <input type="submit" name="submit"/>
        </form>
</body>
</html>
<?php
    include 'db.php';
    include 'links.html';

    if(isset($_POST['submit'])){
        
        $id = $_POST['id'];

        $sql = "Select * from employee where id=?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result = $stmt->get_result();

        $row = $result->fetch_assoc();
        if($result->num_rows > 0){
            echo "<center><h1>Update Form</h1><form action='update1.php' method='POST' name='update1'>";
            echo "<input type='hidden' name='id' value=".$row['id'] .">";
            echo "Name : <input type='text' name='uname' value=".$row['Name'] ."><br/>";
            echo "Department : <input type='text' name='dept' value=".$row['Department'] ."><br/>";
            echo "Salary : <input type='number' name='salary' value=".(int)$row['Salary'] ."><br/>";
            echo "Contact : <input type='number' name='phone' value=".(int)$row['Contact'] ."><br/>";
             
            echo "<input type='submit' name='submit' />";

            echo "</form></center>";
        }else{
            echo "Error in record fetching ".mysqli_error($conn);
        }
    
    }
    
?>
