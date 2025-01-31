<?php 
    session_start();

    if(isset($_SESSION['counter'])){
        $_SESSION['counter']++;
    }else{
        $_SESSION['counter'] = 1;
    }
    echo "the session id is : ".session_id(); //This function is used to get the id of the session
?>
<html>
    <head>
        <title>Page Visit Counter</title>
    </head>
    <body>
        <h1>Welcome to My Website</h1>
        <p> You have visited this page <strong><?php echo $_SESSION['counter']; ?></strong> times</p>
    </body>
</html>