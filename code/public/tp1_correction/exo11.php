<?php

function capital($country) {
    $capital = 'null';

    switch(ucfirst($country)) {
        case 'France':
            $capital = 'Paris';
        case 'Allemagne': 
            $capital = 'Berlin';
            break;
        case 'Italie':
            $capital = 'Rome';
            break;
        default:
            $capital = 'Inconnu';
    }
    return $capital;
}
?> 

<!DOCTYPE html>
<body>
    <h1>Exo 11</h1>
    <p><?= capital('france'); ?></p>
    <p><?= capital('allemagne'); ?></p>
    <p><?= capital('hgiufvreghierirg'); ?></p>
</body>
</html>