<?php
    include 'links.html';
    $servername = "localhost"; //local server name default localhost.
    $username = "root"; //mysql username default is root.
    $password = ""; // no password is set for mysql.
    $dbase = "Doctor"; //using LBRCE Database

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbase);
    //check connection
    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }

    $sql = "SELECT * FROM Doctor";
    $result = mysqli_query($conn,$sql);
?>
<body>
    <center><h1>Appointement Form</h1></center>
    <hr/>
    <center>
    <form action="BookAppoint.php" method="POST">
        <table>
                <tr>
                    <th>Enter Name</th>
                    <td><input type="text" name="name" placeholder="Enter name" required></td>
                </tr>
                <tr>
                    <th>Select Doctor Name</th>
                    <td>
                        <select name="DoctorName" required>
                            <option value="" disabled selected>Select Speciality</option>
                            <?php
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)) {
                                    $name = $row['Name'];
                                    $speciality = $row['speciality'];
                                    echo "<option value='$name'>$name - $speciality</option>";
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Date of Appointment</th>
                    <td><input type="date" name="doa" required></td>
                </tr>
                <tr>
                    <th>Enter Appointement time</th>
                    <td><input type="time" name="time" required></td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <center>
                        <input type="submit" value="Submit" name='submit'>
                        <input type="reset" value="Reset">
                        </center>
                    </td>
                </tr>
            </table>
    </form>
</center>
</body>
<?php
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
        $DoctorName = $_POST['DoctorName'];
        $doa = $_POST['doa'];
        $time = $_POST['time'];
        
        $sql = "Insert into appointments(name,DoctorName,date,time) Values('$name','$DoctorName','$doa','$time');";
        if(mysqli_query($conn,$sql)){
            echo "<script>
                    alert('Appointment booked Successful');
                    window.location.href = 'BookAppoint.php'; // Redirect after the alert
                </script>";
            exit();
        }else{
            echo "Error creating database".mysql_error($conn);
        }

    }
?>