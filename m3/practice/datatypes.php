<?php
    $cars = array("toyota",20.5,10);
    var_dump($cars);
    echo "<br>  array element $cars[0]<br/>";
    echo "array element $cars[1]<br/>";
    echo "array element $cars[2]<br/>";
?>

<?php
    class car{
        function car_model(){
            $model_name = "Toyota";
            echo "car model : ".$model_name;
        }
    }
    $obj = new car();
    $obj->car_model();
?>