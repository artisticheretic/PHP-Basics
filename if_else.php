<?php

    $a = 500;
    $b = 15;
    
    if ($a>78){
        echo "a is greater than 78";
    }
    else echo "a is NOT greater than 78";

?>
<br>

<?php

    $age = 10;

    if($age<13){
        echo "This person is a child";
    }
    elseif($age>13 && $age<=18){
        echo "This person is an adult";
    }
    elseif($age>=18 && $age<=21){
        echo "This person can drink alcohol";
    }
    elseif($age>=21){
        echo "This person is a person";
    }
    else echo "This is what?";

?>