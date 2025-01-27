<?php
    include 'links.html';
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    if (isset($_POST["user"]) && isset($_POST["pwd"])) {
        $username = $_POST["user"];
        $password = $_POST["pwd"];

        // Check credentials (use more secure methods like password hashing in production)
        if ($username == "lbrce" && $password == "lbrce123") {
            setcookie("user", "lbrce", time() + 3600, "/", "", 0);
            setcookie("pwd", "lbrce123", time() + 3600, "/", "", 0);
            echo "<script>alert('Account is verified');</script>";
            header("Location:home.php");  // Correct syntax for header
            exit();
        } else {
            echo '<script>alert("Invalid credentials");</script>';
            header("Location:login.php");
            exit();
        }
    } else {
        echo '<script>alert("Please fill in both fields.");</script>';
        header("Location:login.php");
        exit();
    }
?>
