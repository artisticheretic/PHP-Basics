<?php

    $i = 0;    
    $x = 10;
    while ($i<=100 && $x<=50) {
        echo $i;
        echo "<br>";
        $i += 5;
        $x += 10;
    }
?>
<br>

<?php
    $arraySomething = [2, 3, 4];
    foreach ($arraySomething as $i)  {
        echo $i;
    }
?>
