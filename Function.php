<?php
    //PHP Function Example

    //Function Without Parameter
    function multiply(){
        $num1 = 5;
        $num2 = 10;
        $multiply = $num1 * $num2;
        echo "Multiplication is : $multiply<br>";
    }
    //Parameterised Function
    function add($num1, $num2){
        $sum = $num1 + $num2;
        echo "Sum is : $sum<br>";
    }
    add(50,20);
    multiply();
?>