<?php
    session_start();
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    include "links.html";

    if (isset($_POST["user"]) && isset($_POST["pwd"])) {
        $username = $_POST["user"];
        $password = $_POST["pwd"];

        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        echo "<script>
            alert('Update Successful');
            window.location.href = 'home.php'; // Redirect after the alert
            </script>";
        exit();
    }
?>
<body>
    <hr/>
    <h1>Update Profile</h1>
    <form action="update.php" method="POST">
        Enter Username : <input type="text" name="user" /><br/>
        Enter Password : <input type="text" name="pwd" /><br>
        <button type="submit" >Submit</button><input type="reset" />
    </form>
</body>