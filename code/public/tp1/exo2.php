<?php
function jeRetourneMonArgument($text)
{
    return $text;
}
?>

<!DOCTYPE html>
<body>
    <h1>Exo 2</h1>
    <p><?= jeRetourneMonArgument('abc'); ?></p>
    <p><?= jeRetourneMonArgument(123); ?></p>
</body>
</html>