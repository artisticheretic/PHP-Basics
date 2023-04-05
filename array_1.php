<?php
    $arr = ['this', 'that', 'what'];
    echo $arr[2];
?>
<br>
<?php
    $colors = ['Ishan' => 'black', 'Kaju' => 'white', 'Kiko' => 'rainbow', 2999 => 'infinity'];
    echo $colors['Kiko'];
?>
<br>
<?php
    echo $colors['Kaju'];
?>
<br>
<?php
    echo $colors[2999];
?>
<br>
<?php
    foreach ($colors as $key => $value) {
        echo "<br> Favourite of $key is $value";
    }
?>