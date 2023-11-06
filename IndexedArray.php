<?php
    //PHP Indexed Array
    $my_cars = array("Ferrari", "Supra", "Lamborghini", "BMW");
    $count_cars = count($my_cars);
    echo "My Car Collection is : ";
    for($i = 0; $i < $count_cars; $i++){
        echo $my_cars[$i] . ", ";
    }
?>