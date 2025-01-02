<?php 
    include 'links.html';
    echo "The User Name is ". $_REQUEST["username"];  // here for GET in index we have to use $GET and POST we have use $POST
    echo "<br/>The password is ". $_REQUEST["password"];  // if we don't know what it is then we can use $REQUEST

?>