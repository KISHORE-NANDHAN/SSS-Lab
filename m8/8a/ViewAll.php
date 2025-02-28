<?php
    include 'links.html';
    $servername = "localhost"; //local server name default localhost.
    $username = "root"; //mysql username default is root.
    $password = ""; // no password is set for mysql.
    $dbase = "LBRCE"; //using LBRCE Database

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbase);
    //check connection
    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }

    $sql = "SELECT * FROM registration";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        // Fetch and display data for each row
        echo "<hr/><center><style>
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
        </style>
        <table>
        <tr>
            <th>Rollno</th>
            <th>Name</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Course</th>
        </tr>";
        
        while($row = mysqli_fetch_assoc($result)) {
            // For example, output 'reg', 'name', 'gen', 'dob', 'course' columns
            $rollno = $row['Rollno'];
            $name = $row['Name'];
            $gender = $row['Gender'];
            $dob = $row['DOB'];
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
