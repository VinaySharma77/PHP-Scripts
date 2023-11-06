<?php
    //PHP Script to Replace a String with new String
    $original = "Hello";
    echo "Original String is : $original<br>";
    $replaced = "After Replaceing String is : " . str_replace($original, "Hello", "World");
    echo $replaced;
?>