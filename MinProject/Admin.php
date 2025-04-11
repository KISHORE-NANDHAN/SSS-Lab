<body>
    <center><h1>Doctor Form</h1></center>
    <hr/>
    <center>
    <form action="Admin.php" method="POST">
        <table>
                <tr>
                    <th>Enter Doctor Name</th>
                    <td><input type="text" name="name" placeholder="Enter name" required></td>
                </tr>
                <tr>
                    <th>Speciality</th>
                    <td>
                        <select name="speciality" required>
                            <option value="" disabled selected>Select Speciality</option>
                            <option value="Orthodontist">Orthodontist</option>
                            <option value="Neurologist">Neurologist</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Availability</th>
                    <td>
                        <input type="number" name="start" required> AM
                        <input type="number" name="end" required> PM
                    </td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <center>
                        <input type="submit" value="Submit" name='submit' />
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
        $name = $_POST['name'];
        $speciality = $_POST['speciality'];
        $start = $_POST['start'];
        $end = $_POST['end'];

        $sql = "Insert into doctor(name,speciality,start,end) Values('$name','$speciality','$start','$end');";
        if(mysqli_query($conn,$sql)){
            echo "<script>
                    alert('Doctor add Successful');
                    window.location.href = 'Admin.php'; // Redirect after the alert
                </script>";
            exit();
        }else{
            echo "Error creating database".mysql_error($conn);
        }
    }
?>