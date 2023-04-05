<?php

    /*
    1. Arithmetic Operators
    2. Assignment Operators
    3. Comparison Operators
    4. Logical Operators
    */

    $a = 45;
    $b = 7;
    $x = 10;
    $y = 15;
?>

<!-- Arithmetic Operators -->

<?php
    echo "When a and b are added, the result is " . ($a + $b) ;
?>
<br>
<?php
    echo "When a and b are subtracted, the result is " . ($a - $b) ;
?>
<br>
<?php
    echo "When a and b are multiplied, the result is " . ($a * $b) ;
?>
<br>
<?php
    echo "When a and b are divided, the result is " . ($a / $b) ;
?>
<br>
<?php
    echo "When a and b are exponents, the result is " . ($a ** $b) ;
?>
<br>

<!-- Assignment Operators  -->

<?php
    $x += $a;
    echo "For x, the value is " .$x;
?>
<br>
<?php
    $x -= $a;
    echo "For x, the value is " .$x;
?>
<br>
<?php
    $x *= $a;
    echo "For x, the value is " .$x;
?>
<br>
<?php
    $x /= $a;
    echo "For x, the value is " .$x;
?>
<br>
<?php
    $x %= $a;
    echo "For x, the value is " .$x;
?>
<br>

<!-- Comparison Operators  -->

<?php
    $x = 10;
    $y = 10;
    echo "For x==y, the result is ".($x==$y); // Will return 1(TRUE) if TRUE. Else will return nothing.
?>
<br>
<?php
    echo var_dump($x==$y);
?>
<br>
<?php
    $x = 2;
    $y = 15;
    echo "For x>y, the result is ".($x>$y);
?>
<br>
<?php
    echo var_dump($x>$y);
?>
<br>
<?php
    // Not Equal to ---> <> (!=)
    $x = 2;
    $y = 15;
    echo "For x<>y (!=), the result is ".($x<>$y);
?>
<br>
<?php
    echo var_dump($x<>$y);
?>
<br>

<!-- Logical Operators -->

<?php
    $m = true;
    $n = false;
    echo "For m and n, the result is ";
    echo var_dump($m and $n);
?>
<br>
<?php
    echo "For m and n, the result is ";
    echo var_dump($m or $n);
?>
<br>
<?php
    $m = true;
    $n = true;
    echo "For m && n, the result is ";
    echo var_dump($m && $n); // && ---> and
?>
<br>
<?php
    echo "For m || n, the result is ";
    echo var_dump($m || $n); // || ----> or
?>
<br>
<?php
    echo "For !m, the result is ";
    echo var_dump(!$m);
?>
<br>