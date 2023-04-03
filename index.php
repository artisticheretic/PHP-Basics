<?php

    /* echo ("Hello World");
    echo "<br>";
    echo 9+53;
    echo "<br>";
    echo "This ", "Is ", "Different!"; */

    // $var1 = "Learning PHP";
    // $var2 = "from w3schools.com";
    // $x = 5;
    // $y = 7;

    // echo "<h2>" .$var1. "</h2>";
    // echo "Studying PHP " .$var2.  "<br>";
    // echo $x + $y ;

    // print "<h3> This is an example of a sum" .$x+$y. "</h3>"; 

    // $x = [2, "This is string"];
    // var_dump($x);

    // echo "<br>";

    // $a = true;
    // $b = false;
    // var_dump($b);

    /*
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
        }
        public function message() {
          return "My car is a " . $this->color . " " . $this->model . "!";
        }
      }
      
      $myCar = new Car("black", "Volvo");
      echo $myCar -> message();
      echo "<br>";
      $myCar = new Car("red", "Toyota");
      echo $myCar -> message();
    */

    // echo strlen ("Hello World");
    // echo "<br>";
    // echo str_word_count("There are a total of 7 words here");
    // echo "<br>";
    // echo strrev ("This is the reverse of this sentence!");
    // echo "<br>";
    // echo strpos ("Hello World!", "H"); // Output - 0, Because Index(0) = H
    // echo "<br>";
    // echo str_replace ("There", "Here", "There she is");

    $x = 5985;
    var_dump(is_float($x));

    echo "<br>";
    
    $y = "This is a string, not a integer";
    var_dump(is_string($y));

    echo "<br>";

    $x = 1.9e411;
    var_dump($x);

?>