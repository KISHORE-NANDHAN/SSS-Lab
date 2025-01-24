<?php
setcookie("college","lbrce",time()+3600,"/","",0);
setcookie("branch","CSE",time()+3600,"/","",0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "The cookies create for branch and code";
    ?>
</body>
</html>