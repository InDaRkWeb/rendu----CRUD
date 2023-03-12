<?php

function somme(int $numbre1,int $numbre2): int 
{
    return $numbre1 + $numbre2;
}

?>


<!DOCTYPE html>
<body>
    <h1>Exo 4</h1>
    <p><?= somme(5, 6); ?></p>
    <p><?= somme(1, 3); ?></p>
</body>
</html>