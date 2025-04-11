<?php
    include 'links.html';
?>
<body>
    <center><h1>Registration Form</h1></center>
    <hr/>
    <center>
    <h3>Registration Form</h3>
    <form action="regValid.php" method="POST">
        <table>
                <tr>
                    <th>Enter Name</th>
                    <td><input type="text" name="name" placeholder="Enter name" required></td>
                </tr>
                <tr>
                    <th>Enter Mail</th>
                    <td><input type="email" name="email" placeholder="Enter email" required></td>
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
                    <th>Enter Password</th>
                    <td><input type="password" name="pwd" placeholder="Enter Password" required></td>
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
