<?php   
    session_start();
    $username = $_SESSION["username"];
    $userid = $_SESSION["userid"];
    echo "<h1>Welcome to ".$username,"</h1>";
    //to get the complete details of all the session
    print_r($_SESSION);
?>
