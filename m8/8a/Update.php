<?php
    include 'links.html';
?>
<body>
    <center>
        <form method="post" action="Update.php">
            <input type='search' name='search' placeholder='Enter Rollno to fetch records' />
            <br><br>
            <input type='submit' value='Search'>
        </form>
    </center>

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
                $row = mysqli_fetch_assoc($result);

                $rollno = $row['Rollno'];
                $name = $row['Name'];
                $gender = $row['Gender'];
                $dob = $row['DOB'];
                $course = $row['Course'];
                ?>
                <center>
                <form action="UpdateHandle.php" method="POST">
                <table>
                    <tr>
                        <th>Enter Reg.no</th>
                        <td><input type="number" name="reg" placeholder="Registration number" value="<?php echo $rollno; ?>" disabled></td>
                    </tr>
                    <tr>
                        <th>Enter Name</th>
                        <td><input type="text" name="name" placeholder="Enter name" value="<?php echo $name; ?>" required></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>
                            <input type="radio" name="gen" value="male" <?php if($gender == "male") echo "checked"; ?> required> Male
                            <input type="radio" name="gen" value="female" <?php if($gender == "female") echo "checked"; ?> required> Female
                        </td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td><input type="date" name="dob" value="<?php echo $dob; ?>" required></td>
                    </tr>
                    <tr>
                        <th>Select a Course</th>
                        <td>
                            <select name="course" required>
                                <option value="" disabled>Select Course</option>
                                <option value="python" <?php if($course == "python") echo "selected"; ?>>Python</option>
                                <option value="java" <?php if($course == "java") echo "selected"; ?>>Java</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            <center>
                            <input type="submit" value="Submit">
                            <input type="reset" value="Reset">
                            </center>
                        </td>
                    </tr>
                </table>
                </form>
                </center>
                <?php
            } else {
                // If no rows found
                echo "<center><p>No records found for Rollno: ".$search_no."</p></center>";
            }

            // Close the prepared statement
            mysqli_stmt_close($stmt);
        } else {
            // If no search input is provided
            echo "<center><p>Please enter a Rollno to search.</p></center>";
        }

        // Close the database connection
        mysqli_close($conn);
    ?>
</body>
