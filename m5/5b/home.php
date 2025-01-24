<?php 
    include 'links.html';

    if(isset($_COOKIE["user"])&&isset($_COOKIE["pwd"]))
    {
        echo " Welcome to home page Mr. ".$_COOKIE["user"]."<br/>";
    }
    else{
        echo '<script>alert("please login first"); </script>';
        header("Location : login.php");
        exit();
    }
?>