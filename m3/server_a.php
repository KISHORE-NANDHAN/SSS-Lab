<?php 
    $text = isset($_GET['text']) ? $_GET['text'] : ' ';

    if(!empty($text))  
        echo "You typed : ". htmlspecialchars($text);
    else    
        echo "please type something ....";
?>