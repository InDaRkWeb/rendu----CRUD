<?php
$tableau = [];
for($i = 0; $i < 10; $i++) {
    $tableau[] = rand(0,50);
}

if(in_array('42', $tableau)) {
    echo 'Le nombre 42 est présent !<br>';
} else {
    echo 'Le nombre 42 n\'est pas présent !<br>';
}

echo '<pre>';
var_dump($tableau);
echo '</pre>';

?> 