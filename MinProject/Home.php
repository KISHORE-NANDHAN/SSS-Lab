<?php
    include 'links.html';
    session_start();
    echo "<h1>Hello " . $_SESSION['name'] . "</h1>";

?>