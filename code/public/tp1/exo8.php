<?php

function monDernierElement(array $array)
{
    if(isset($array) && empty($array)) {
        return null;
    }

    return end($array);
    //return $array[count($array)-1];
    // return array-reverse($array)[0]
}
?> 

<!DOCTYPE html>
<body>
    <h1>Exo 7</h1>
    <p><?= monDernierelement([1,2,3]); ?></p>
    <p><?= monDernierelement([1,2,3,4,1,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,41,2,3,10]); ?></p>
    <p><?= monDernierelement(['bonjour', 'le', 'monde']); ?></p>
    <p><?= monDernierelement(['bonjour', 'le', 'monde', 'il', 'fait', 'beau']); ?></p>
    <p><?= monDernierelement([]); ?></p>
</body>
</html>