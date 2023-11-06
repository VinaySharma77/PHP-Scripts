<?php
    //PHP Array Sorting
    $my_cars = array("Ferrari", "Supra", "Lamborghini", "BMW");
    echo "My Car Collection is : ";
    echo $my_cars[0] . ", " . $my_cars[1] . ", " . $my_cars[2] . ", "  . $my_cars[3] . "<br>";
    $sort_cars = sort($my_cars);
    echo "Sorted Cars Array : ";
    echo $my_cars[0] . ", " . $my_cars[1] . ", " . $my_cars[2] . ", "  . $my_cars[3] . "<br>";
?>