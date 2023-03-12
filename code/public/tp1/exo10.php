<?php

function verificationPassword($password){
    $valid = 'false';

    if(strlen($password) >= 8) {
        $valid = 'true';
    }

    return $valid;
 } 
?> 

<!DOCTYPE html>
<body>
    <h1>Exo 10</h1>
    <p><?= verificationPassword('azerty'); ?></p>
    <p><?= verificationPassword('azertyUIOPQSDFGHJKLMWXCVBN'); ?></p>
</body>
</html>