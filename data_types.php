<?php

    $name = "Ishan";
    $income = 480000;

    /* PHP Data Types 
        1. String
        2. Integer
        3. Float
        4. Array
        5. Boolean
        6. Object
        7. NULL
    */

    // String - Sequence of characters   
    $name = "Ishan";
    $friend = 'Kaju'; // Can use both single AND double quotes
    echo "$name's friend is $friend <br>";

    // Integer - Non Decimal Number
    $income = 45500;
    $debts = -4500;
    echo $income + $debts;
    echo "<br>";

    // Float - Decimal point number
    $income = 480000.00;
    $debts = -345.1232;
    echo $income;
    echo "<br>";
    echo $debts;

    // Boolean - Can either be true, or false
    $x = true;
    $is_friend = false;
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $is_friend; // Returns blank string. Because $is_friend is FALSE
    echo var_dump($x);
    echo "<br>";
    echo var_dump($is_friend);

    // Object - Instances of classes
    // Employee is a class ---> Ishan can be an object 

    // Array - Used to store multiple values in a single variable.
    $friends = array("Kaju", "Kiko", "Mano", "Chonka");
    echo "<br>";
    echo var_dump($friends);
    echo "<br>";
    echo $friends[3];
    echo "<br>";
    echo $friends[5];

    // NULL - No Value
    $name = NULL;
    echo var_dump($name);
?>