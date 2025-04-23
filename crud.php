
<html>
    <body>
        <form name="registration" action="crud.php" method="POST">
            id : <input type="number" name="id"/><br/>
            Name : <input type="text" name="name"/><br/>
            Place : <input type="text" name="place"/><br/>
            <input type="submit" name="submit"/>
        </form>
    </body>
</html>
<?php
    if(isset($_POST['submit'])){
        $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Exp";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Database connected Successfully";
    }

    // $sql = "CREATE TABLE Emp(id int,name varchar(20),place varchar(20))";
    // if(mysqli_query($conn,$sql)){
    //     echo "Table created Successfully";
    // }else{
    //     echo "Error Occurred".mysqli_error();
    // }

    $id = $_POST['id'];
    $name = $_POST['name'];
    $place = $_POST['place'];

    var_dump($_POST);

    $sql = "Insert into emp(id,name,place) values (?,?,?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $id, $name, $place);

    if($stmt->execute()){
        echo "Data inserted Successfully";
    }else{
        echo "Error Occurred".mysqli_error($conn);
    }

    $stmt->close();
    $conn->close();

    }
?>