<?php

function quelleAnnee() {
    return date('Y');
}

function quelleDate(){
    return date('d-F-Y');
}

?> 

<!DOCTYPE html>
<body>
    <h1>Exo 14</h1>
    <p><?= quelleAnnee(); ?></p>
    <p><?= quelleDate(); ?></p>
</body>
</html>