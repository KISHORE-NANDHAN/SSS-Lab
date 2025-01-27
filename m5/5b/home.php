<?php 
    include 'links.html';

    if (isset($_COOKIE["user"]) && isset($_COOKIE["pwd"])) {
        echo "Welcome to the home page, Mr. " . htmlspecialchars($_COOKIE["user"]) . "<br/>";
    } else {
        echo '<script>
                alert("Please login first");
                window.location.href = "login.php"; // Redirect after the alert
              </script>';
        exit();
    }
?>
