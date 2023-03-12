<?php
$i = 0; 
while($i <= 20) {
    if($i == 10) {
        echo '<strong>'.$i.'</strong>';
    } else {
        echo $i;
    }
    echo '<br/>';
    $i = $i+2;
}
?> 