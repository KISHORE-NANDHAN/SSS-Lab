<?php include './links.html'; ?>

<?php 
    include './db.php';

    $sql = "SELECT * FROM users";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->get_result();
    if($result->num_rows > 0){
        echo "<center><table>";
        while($row = $result->fetch_assoc()){
            echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['Name']}</td>
            <td>{$row['Email']}</td>
            <td>{$row['Password']}</td>
            </tr>";
        }
        echo "</table></center>";
    }else{
        echo "No users found.";
    }

?>