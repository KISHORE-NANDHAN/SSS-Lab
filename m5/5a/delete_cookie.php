<?php
    setcookie("college","",time()-3600,"/","",0);
    setcookie("branch","",time()-3600,"/","",0);
?>
<html>
    <head>
        <title>Delete cookie</title>
    </head>
    <body>
        <?php
            echo "the cookies deleted for ".$_COOKIE['branch'];
        ?>
    </body>
</html>
