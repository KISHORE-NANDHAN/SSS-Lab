<?php
    include "links.html";
    setcookie("user","",time()-3600,"/","",0);
    setcookie("pwd","",time()-3600,"/","",0);
    header("Location: login.php");
    ?>
        <script> alert('redirecting to login');
    <?php
    exit();
?>

