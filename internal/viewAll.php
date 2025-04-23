<?php
    include 'db.php';
    include 'links.html';

    $sql = "Select * from employee";

    $stmt = $conn->prepare($sql);

    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0){
        echo "<center><table border='1'>
            <tr>
            <th>id</th>
            <th>Name</th>
            <th>Department</th>
            <th>Salary</th>
            <th>Contact</th>
            </tr>
            ";
        while($row = $result->fetch_assoc()){
            echo "<tr><td>".$row['id']."</td>
            <td>".$row['Name']."</td>
            <td>".$row['Department']."</td>
            <td>".$row['Salary']."</td>
            <td>".$row['Contact']."</td></tr>";
        }
        echo "</table></center>";
    }else{
        echo "Error in record fetching ".mysqli_error($conn);
    }

?>