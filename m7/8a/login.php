<?php
    include 'links.html';
?>
<body>
    <center><h1>Student Registration Form</h1></center>
    <hr/>
    <center>
    <h3>Registration Form</h3>
    <form action="loginValid.php" method="POST">
    <table>
                <tr>
                    <th>Enter Reg.no</th>
                    <td><input type="number" name="reg" placeholder="Registration number" required></td>
                </tr>
                <tr>
                    <th>Enter Name</th>
                    <td><input type="text" name="name" placeholder="Enter name" required></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>
                        <input type="radio" name="gen" value="male" required> Male
                        <input type="radio" name="gen" value="female" required> Female
                    </td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td><input type="date" name="dob" required></td>
                </tr>
                <tr>
                    <th>Select a Course</th>
                    <td>
                        <select name="course" required>
                            <option value="" disabled selected>Select Course</option>
                            <option value="python">Python</option>
                            <option value="java">Java</option>
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
</body>
