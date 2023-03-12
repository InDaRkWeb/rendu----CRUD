<?php

function concatenation(string $arg1,string $arg2): string
{
    return $arg1 .' '. $arg2;
}

?>


<!DOCTYPE html>
<body>
    <h1>Exo 2</h1>
    <p><?= concatenation('abc', 'dfe'); ?></p>
    <p><?= concatenation('bonjour', 'le monde'); ?></p>
</body>
</html>
