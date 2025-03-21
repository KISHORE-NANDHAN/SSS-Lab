<?php
    $conn = new mysqli("localhost", "root", "", "lbrce");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "select * from images ORDER BY id DESC";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0) {
        while($row = mysqli_fetch_assoc($result)){
            echo "<div>";
            echo "<p><strong>".htmlspecialchars($row['name'])."</strong></p>";
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"width="200"/>';
            echo "</div><hr>";
        }
    } else {
        echo "Error displaying image: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
