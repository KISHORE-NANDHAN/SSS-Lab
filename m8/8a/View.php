<?php
    include 'links.html';
?>

<body>
    <center>
        <form method="post" action="View.php">
            <input type='search' name='search' placeholder='Enter Rollno to fetch records' />
            <br>
            <input type='submit' value='Search'>
        </form>
    </center>
</body>

<?php
    // Database credentials
    $servername = "localhost"; // Local server name
    $username = "root"; // MySQL username
    $password = ""; // Password for MySQL
    $dbase = "LBRCE"; // Using LBRCE Database

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbase);

    // Check connection
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Check if search input is set and not empty
    if (isset($_POST['search']) && !empty($_POST['search'])) {
        $search_no = mysqli_real_escape_string($conn, $_POST['search']); // Sanitize user input

        // Use a prepared statement for security
        $sql = "SELECT * FROM registration WHERE Rollno=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $search_no); // Bind the search value as string
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Check if the result contains any rows
        if(mysqli_num_rows($result) > 0) {
            // Fetch and display data for each row
            echo "<hr/><center><table border='1'>
            <tr>
                <th>Rollno</th>
                <th>Name</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Course</th>
            </tr>";
            
            $row = mysqli_fetch_assoc($result);
            $rollno = $row['Rollno'];
            $name = $row['Name'];
            $gender = $row['Gender'];
            $dob = $row['DOB'];
            $course = $row['Course'];

            echo "
                <tr>
                    <td>".$rollno."</td>
                    <td>".$name."</td>
                    <td>".$gender."</td>
                    <td>".$dob."</td>
                    <td>".$course."</td>
                </tr>
            ";
            echo "</table></center>";
        } else {
            // If no rows found
            echo "<center>No records found for Rollno: ".$search_no."</center>";
        }

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    } else {
        // If no search input is provided
        echo "<center>Please enter a Rollno to search.</center>";
    }

    // Close the database connection
    mysqli_close($conn);
?>
