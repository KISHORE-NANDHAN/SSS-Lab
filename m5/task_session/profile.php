<?php 
    session_start();
    include 'links.html';

    if(isset($_SESSION["username"])&&isset($_SESSION["password"]))
    {
        echo " Welcome to Profile page Mr. ".$_SESSION["username"]."<br/>";
        echo " your password is ".$_SESSION["password"]."<br/>";
    }
    else{
        echo "Sorry !! please login first ";
    }
?>