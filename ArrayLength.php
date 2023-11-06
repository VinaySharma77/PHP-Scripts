<?php
    //Length of Array in PHP
    $my_cars = array("Ferrari", "Supra", "Lamborghini", "BMW");
    $my_fav = $my_cars[1];
    $count_cars = count($my_cars);
    echo "My Car Collection is : ";
    echo $my_cars[0] . ", " . $my_cars[1] . ", " . $my_cars[2] . ", "  . $my_cars[3] . "<br>";
    echo "I have total $count_cars Cars<br>";
    echo "My Favourite Car is : $my_fav";
?>