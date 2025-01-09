<?php
    //syntax
    print("Welcome to SSS lab<br>");
    echo "welcome to SSS LAB<br><br>" ;

    //variables
    $txt = "welcome";
    $x = 5;
    $y = 10.5;
    echo "$txt " . " $x "." $y <br>";
    echo $x*$y . "<br><br>";

    //Variable Scope
    //global
    $z = 10;
    function fun(){
        global $z;
        echo "<h2> $z </h2>";
    }
    fun();
    echo $z."<br><br>";

    //local
    $k = 10;
    function myfun(){
        $k=20;
        echo "<h2> $k </h2>";
    }
    myfun();
    echo $k."<br><br>";

    //static
    function myTest() {
        static $x = 0;
        echo $x."<br><br>";
        $x++;
    }  
    myTest();
    myTest();
    myTest();

    //global arrays
    $a=10;
    $b = 20;
    function test(){
        $GLOBALS['b'] = $GLOBALS['a']+$GLOBALS['b'];
    }
    test();
    echo $b;
?>