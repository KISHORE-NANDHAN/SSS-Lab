<?php
    include "links.html";
    setcookie("user", "", time() - 3600, "/", "", 0);
    setcookie("pwd", "", time() - 3600, "/", "", 0);
    echo "<script>
            alert('Redirecting to login');
            window.location.href = 'login.php'; // Redirect after the alert
          </script>";
    exit();
?>