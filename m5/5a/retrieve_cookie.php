<html>
   <head>
      <title>Retrieve cookies in php</title>
   </head>
   <body>
      <?php
         if(isset($_COOKIE["college"])&&isset($_COOKIE["branch"]))
         {
            echo " the college name = ".$_COOKIE["college"]."<br/>";
            echo "the branch name = ".$_COOKIE["branch"];
         }
         else{
            echo "Sorry !! cookies is not set. ";
         }
         
      ?>
   </body>
</html>