<?php

require_once 'fonction.ini.php';
$connexion = connexion();

if(isset($_POST['username']) && !empty($_POST['username'])) {
    $result = $connexion->query('select * from Users where username="'.$_POST['username'].'" and password="'.sha1($_POST['password']).'"');

    if($result->rowCount() >=1 ) {
        $_SESSION['connexion'] = 'Bienvenue '.$_POST['username'].' !';
        header("Location: ./read.php"); 
    } else {
        $error = "Erreur dans la connexion, verifier votre username et mot de passe";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleIndex.css">
    <title>Connexion</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST">
                    <h2>Connexion</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="username" required/>
                        <label for="username">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required/>
                        <label for="password">Password</label>
                    </div>
                    <button typ="submit">Connexion</button>
                </form>
            </div>
        </div>
    </section>

    <?php if(isset($error) && !empty($error)) {
        echo '<p class="error">'.$error.'</p>';
    }
    ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>