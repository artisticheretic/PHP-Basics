<!-- Total Marks -->
<br>
<?php

    function processMarks ($marksArr) {
        $sum = 0;
        foreach ($marksArr as $value) {
            $sum += $value;
        }
        return $sum;
    }

    $rohanDas = [34, 98, 45, 14, 98, 90];
    $sumMarks = processMarks ($rohanDas);

    $ishanGhosh = [99, 98, 99, 99, 98, 80];
    $sumMarksIshan = processMarks ($ishanGhosh); 
    echo "Total marks scored by Ishan out of 600 is $sumMarksIshan";
?>
<br>
<?php
    echo "Total marks scored by Rohan out of 600 is $sumMarks";
?>
<br>
<!-- Average Marks -->
<br>
<?php
    function avgMarks ($marksAvg) {
        $avg = 0;
        $sum = 0;
        $i = 0;
        foreach ($marksAvg as $value) {
            $sum += $value;
            $i++;
            $avg = $sum/$i;
        }
        return $avg;
    }

    $ishanGhoshAvg = [60, 50, 70, 80, 40, 20];
    $avgMarks = avgMarks ($ishanGhoshAvg);
    echo "Average of Ishan out of 100 is $avgMarks";
?>