<?php 
    session_start();
    echo "the session id is : ".session_id(); //This function is used to get the id of the session
?>
<?php 
    include 'links.html';

    if (isset($_SESSION['username']) && isset($_SESSION["password"])) {
        echo "Welcome to the home page, Mr. " . htmlspecialchars($_SESSION["username"]) . "<br/>";
    } else {
        echo '<script>
                alert("Please login first");
                window.location.href = "login.php"; // Redirect after the alert
              </script>';
        exit();
    }
?>
