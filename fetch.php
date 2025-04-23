<!-- 
<html>
    <body>
        <form name="registration" action="fetch.php" method="POST">
            id : <input type="number" name="id"/><br/>
            <input type="submit" name="submit"/>
        </form>
    </body>
</html> -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Exp";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Database connected Successfully<br/><br/>";
    }

    // $sql = "CREATE TABLE Emp(id int,name varchar(20),place varchar(20))";
    // if(mysqli_query($conn,$sql)){
    //     echo "Table created Successfully";
    // }else{
    //     echo "Error Occurred".mysqli_error();
    // }

    // $id = $_POST['id'];

    // $sql = "select * from emp where id = ?";

    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("i", $id);

    // if($stmt->execute()){
    //     $result = $stmt->get_result();
    //     while($row = $result->fetch_assoc()){
    //         echo $row['id']. " " .$row['name']. " " .$row['place'];
    //     }
    // }

    $sql = "select * from emp";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo $row['id']. " " .$row['name']. " " .$row['place'];
    }
    
    $conn->close();

?>