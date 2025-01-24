<?php 
    include 'links.html';

    if(isset($_COOKIE["user"])&&isset($_COOKIE["pwd"]))
    {
        echo " Welcome to Profile page Mr. ".$_COOKIE["user"]."<br/>";
        echo " your password is ".$_COOKIE["pwd"]."<br/>";
    }
    else{
        echo "Sorry !! please login first ";
    }
?>