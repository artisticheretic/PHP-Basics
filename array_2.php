<?php
    $multiDim = [
        [2, 5, 7, 8],
        [1, 3, 5, 3],
        [0, 6, 9, 9]
    ];
    for ($i=0; $i < count($multiDim); $i++) { 
        for ($j=0; $j < count($multiDim[$i]); $j++) { 
            echo $multiDim[$i][$j];
            echo " ";
        }
        echo "<br>";
    }
?>
<br>