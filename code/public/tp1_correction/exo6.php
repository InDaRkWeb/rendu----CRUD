<?php

function plusGrand(int $nb1, int $nb2) 
{
    if($nb1 > $nb2) {
        return $nb1 . ' est plus grand';
    } else if($nb2 < $nb1) {
        return $nb2 . ' est le plus grand';
    } else {
        return $nb1 .': les deux nombres sont egaux';
    }
}

function plusPetit(int $nb1, int $nb2, int $nb3) 
{
    if($nb1 == $nb2 && $nb2 == $nb3) {
        return $nb1 . ': est le nombre le plus petit';
    } else if($nb1 < $nb2 && $nb1 < $nb3) {
        return $nb1 . ' est le plus petit';
    } else if($nb2 < $nb3 && $nb2 < $nb1) {
        return $nb2 . ' est le plus petit';
    } else if($nb3 < $nb2 && $nb3 < $nb1) {
        return $nb3 . ' est le plus petit';
    }
    return 'petit filou tu as triché';
    // return min($nb1, $nb2, $nb3);
}

?>

<!DOCTYPE html>
<body>
    <h1>Exo 5</h1>
    <h2>Plus grand</h2>
    <p><?= plusGrand(5, 20); ?></p>
    <p><?= plusGrand(20, 5); ?></p>
    <p><?= plusGrand(20, 20); ?></p>
    <h2>Plus petit</h2>
    <p><?= plusPetit(3, 21, 10); ?></p>
    <p><?= plusPetit(20, 2, 10); ?></p>
    <p><?= plusPetit(10, 1, 20); ?></p>
    <p><?= plusPetit(20, 20, 20); ?></p>
</body>
</html>