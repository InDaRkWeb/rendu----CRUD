<?php

function listHTML($title, $lists) {
    if(empty($title) || empty($lists)) {
        return null;
    }

    $string = "<h3>$title</h3><ul>";
    foreach($lists as $item) {
        $string .= "<li>$item</li>";
    }

    $string .= '</ul>';

    return $string;
}
?> 

<!DOCTYPE html>
<body>
    <h1>Exo 12</h1>
    <p><?= listHTML('Ville', ['Paris', 'Berlin', 'Rome']); ?></p>
    <p><?= listHTML('Pays', ['France', 'Allemagne', 'Italy']); ?></p>
    <p><?= listHTML('Prenom', ['Titi', 'Toto', 'tata']); ?></p>
</body>
</html>