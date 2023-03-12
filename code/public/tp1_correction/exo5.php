<?php

function isMajeur(int $age) 
{
    return $age >= 18 ? true : false;
    if($age >= 18) {
        return true;
    }
    return false;
}

?>


<!DOCTYPE html>
<body>
    <h1>Exo 5</h1>
    <p><?= isMajeur(5); ?></p>
    <?php if(isMajeur(35)) {
        ?> <p>Je suis majeur</p> <?php
    } else { ?>  
        <p>Je suis mineur</p> 
    <?php } ?>
    <p><?= isMajeur(35); ?></p>
</body>
</html>