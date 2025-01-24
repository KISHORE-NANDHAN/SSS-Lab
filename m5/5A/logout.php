<?php
    include "links.html";
    setcookie("user","",time()-3600,"/","",0);
    setcookie("pwd","",time()-3600,"/","",0);
    header("Location: login.php");
    echo "<script> alert('redirecting to login'); </script>";
    exit();
?>

