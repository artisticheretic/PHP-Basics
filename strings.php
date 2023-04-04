<?php

    $name = "My name is Ishan";
    echo $name;
    echo "<br>";
    
    echo strlen($name);
    echo "<br>";

    echo str_word_count($name);
    echo "<br>";

    echo strrev($name);
    echo "<br>";

    echo strpos($name, "is");
    echo "<br>";

    echo str_replace("Ishan", "Kaju", $name);
    echo "<br>";

    echo str_repeat($name, 5);
    echo "<br>";

    echo "<pre>";
    echo ltrim("        This is a good person       ");
    echo "<br>";
    echo rtrim("        This is a good person       ");
    echo "</pre>";
?>