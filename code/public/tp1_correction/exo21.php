<?php
$tableau = [];
for($i = 0; $i < 10; $i++) {
    $tableau[] = rand(0,100);
}

$tableauInf = [];
$tableauSup = [];

foreach($tableau as $t) {
    if($t < 50) {
        $tableauInf[] = $t;
    } else {
        $tableauSup[] = $t;
    }
}

echo '<h1>Tableau source</h1>';
echo '<pre>';
var_dump($tableau);
echo '</pre>';

echo '<h1>Tableau Sup</h1>';
echo '<pre>';
var_dump($tableauSup);
echo '</pre>';

echo '<h1>Tableau inf</h1>';
echo '<pre>';
var_dump($tableauInf);
echo '</pre>';

echo 'Tableau inf ';
foreach($tableauInf as $t1) {
    echo "$t1 ";
}
echo '<br>Tableau sup ';
foreach($tableauSup as $t2) {
    echo "$t2 ";
}
?> 