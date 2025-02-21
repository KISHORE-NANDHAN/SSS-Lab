
<?php
    $servername = "localhost"; //local server name default localhost.
    $username = "root"; //mysql username default is root.
    $password = ""; //blank if no password is set for mysql.
    $dbase = "LBRCE"; //using LBRCE Database

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbase);
    //check connection

    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }
    
    $search_no = $_POST['search'];

    $sql = "SELECT * FROM registration WHERE Rollno='$search_no'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        // Fetch and display data for each row
        echo "<hr/><center><table border='1'>
        <tr>
            <th>Rollno</th>
            <th>Name</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Course</th>
        </tr>";
        while($row = mysqli_fetch_assoc($result)) {
            // For example, output 'reg', 'name', 'gen', 'dob', 'course' columns
            $rollno = $row['Rollno'] ;
            $name = $row['Name'] ;
            $gender = $row['Gender'] ;
            $dob = $row['DOB'] ;
            $course = $row['Course'];

            echo"
                <tr>
                    <td>".$rollno."</td>
                    <td>".$name."</td>
                    <td>".$gender."</td>
                    <td>".$dob."</td>
                    <td>".$course."</td>
                </tr>
            ";
        }
        echo "</table></center>";
    }

?>
