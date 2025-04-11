<?php
    include 'links.html';
?>
<body>
    <center><h1>login Form</h1></center>
    <hr/>
    <center>
    <h3>login Form</h3>
    <form action="login.php" method="POST">
        <table>
                <tr>
                    <th>Enter Mail</th>
                    <td><input type="email" name="email" placeholder="Enter email" required></td>
                </tr>
                <tr>
                    <th>Enter Password</th>
                    <td><input type="password" name="pwd" placeholder="Enter Password" required></td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <center>
                            <input type="submit" value="Submit" name="submit" />
                            <input type="reset" value="Reset">
                        </center>
                    </td>
                </tr>
            </table>
    </form>
</center>
</body>
<?php
    session_start();
    if(isset($_POST['submit'])){
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
        $pwd = $_POST['pwd'];
        if($email == "lbrce@gmail.com" && $pwd=="lbrce123"){
            echo "<script>
                        alert('Login Successful');
                        window.location.href = 'Admin.php'; // Redirect after the alert
                    </script>";
            exit();
        }else{
            $stmt = $conn->prepare("SELECT * FROM registration WHERE email=? AND password=?");
            $stmt->bind_param("ss", $email, $pwd);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $row['Name'];
                echo "<script>
                        alert('Login Successful');
                        window.location.href = 'Home.php'; // Redirect after the alert
                    </script>";
                exit();
            } else {
                echo "Error creating database".mysql_error($conn);
            }
        }

    }
?>