<?php
    session_start();
    echo "Before Update username and userId "."<br/>";
    echo "UserName is : ".$_SESSION["username"]."<br/>";
    echo "user Id is : ".$_SESSION["userid"]."<br/>";

    $_SESSION["userid"] = "511";
?>
<html>
    <body>
        <?php
            echo "After Update Username and UserId "."<br/>";
            echo "UserName is : ".$_SESSION["username"]."<br/>";
            echo "user Id is : ".$_SESSION["userid"]."<br/>";
        ?>
    </body>
</html>