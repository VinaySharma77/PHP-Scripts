<?php
    //Logical Operator performs logical operations on variables
    $num1 = 50;
    $num2 = 25;
    $num3 = 30;
    echo "Variables \$num1 = $num1 and \$num2 = $num2 and \$num3 = $num3<br>";
    if($num1 > $num2 && $num1 > $num3){
        echo "\$num1 is greater";
    }
    else if($num2 > $num1 && $num2 > $num3){
        echo "\$num2 is greater";
    }
    else if($num1 == $num2 && $num2 == $num3){
        echo "All numbers are equal";
    }
    else if($num1 < 0 || $num2 < 0 || $num3 < 0){
        echo "Negative number";
    }
    else{
        echo "\$num3 is greater";
    }
?>