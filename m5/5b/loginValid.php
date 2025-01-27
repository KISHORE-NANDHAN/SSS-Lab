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
            echo "<script>
                    alert('Account is verified');
                    window.location.href = 'home.php'; // Redirect after the alert
                  </script>";
            exit();
        } else {
            echo "<script>
                    alert('Invalid credentials');
                    window.location.href = 'login.php'; // Redirect after the alert
                  </script>";
            exit();
        }
    } else {
        echo "<script>
                alert('Please fill in both fields.');
                window.location.href = 'login.php'; // Redirect after the alert
              </script>";
        exit();
    }
?>
