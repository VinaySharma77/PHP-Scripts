<?php
    //PHP 2D Arrays
    $my_cars = array(
        array("Ferrari", 1),
        array("Supra", 2),
        array("Lamborghini", 3),
        array("BMW", 4)
    );
    $count_cars = count($my_cars);
    echo "My Car Collection is : ";
    for($i = 0; $i <$count_cars; $i++){
        echo $my_cars[$i][0] . " ";
    }
?>