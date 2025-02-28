<?php
    include 'links.html';
?>

<body>
    <center>
        <form method="post" action="View.php">
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

    <style>
        /* Style for the form */
        form {
            margin-top: 20px;
            font-family: Arial, sans-serif;
        }
        input[type='search'] {
            padding: 8px;
            font-size: 14px;
            width: 250px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type='submit'] {
            padding: 8px 15px;
            font-size: 14px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type='submit']:hover {
            background-color: #45a049;
        }

        /* Style for the message (error or success) */
        p {
            font-size: 16px;
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Style for the table */
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }

        /* Centering the entire page content */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        center {
            display: block;
            margin-top: 20px;
        }
    </style>
</body>
