<?php 
    session_start();

    $_SESSION["username"] = "CSE";
    $_SESSION["userid"] = "501";
?>
<html>
    <body>
        <?php echo "Session variable is set."; ?>
        <center>
            <h1>
                <a href="second_page.php">Go to second page</a>
            </h1>
        </center>
    </body>
</html>