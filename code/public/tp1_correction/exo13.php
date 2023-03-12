<?php

function remplacerLesLettres($string) {
    $string = str_replace('e', '3', $string);
    $string = str_replace('E', '3', $string);
    $string = str_replace('i', '1', $string);
    $string = str_replace('I', '1', $string);
    $string = str_replace('o', '0', $string);
    $string = str_replace('O', '0', $string);

    return $string;
}

function remplacerLesLettres2($string) {
   $transformation = [
    'e' => '3',
    'E' => '3',
    'I' => '1',
    'i' => '1',
    'o' => '0',
    'O' => '0',
   ];

    return strtr($string, $transformation);
}

function remplacerLesLettres3($string) {
     return strtr($string, 'eEiIoO', '331100');
 }
 
?> 

<!DOCTYPE html>
<body>
    <h1>Exo 13</h1>
    <p><?= remplacerLesLettres3('Bonjour les amis'); ?></p>
    <p><?= remplacerLesLettres3('Les cours de programmation Web sont trops cools'); ?></p>
</body>
</html>