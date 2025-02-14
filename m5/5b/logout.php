<?php
    session_start();
    include "links.html";
?>
<html>
    <body>
        <?php
            session_unset();
            session_destroy();
            echo "session Destroy successfully";
        ?>
    </body>
</html>