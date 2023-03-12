<?php

function monPremierElement(array $array)
{
    if(isset($array) && empty($array)) {
        return null;
    }
    return $array[0];
}
?> 

<!DOCTYPE html>
<body>
    <h1>Exo 7</h1>
    <p><?= monPremierElement([1,2,3]); ?></p>
    <p><?= monPremierElement(['bonjour', 'le', 'monde']); ?></p>
    <p><?= monPremierElement([]); ?></p>
</body>
</html>