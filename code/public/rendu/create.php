<?php 
require_once 'fonction.ini.php';
$connexion = connexion();

if(isset($_POST)){
if(isset($_POST['Marque']) && !empty($_POST['Marque'])
&& isset($_POST['Models']) && !empty($_POST['Models'])
&& isset($_POST['Année']) && !empty($_POST['Année'])){
$sql = 'INSERT INTO `Voitures` (`Pays`, `Marque`, `Models`, `Année`, `Puissance_en_ch`, `Couple`, `Type`, `Poids_en_kg`) VALUES (:Pays, :Marque, :Models, :Année, :Puissance_en_ch, :Couple, :Type, :Poids_en_kg);';
$query = $connexion->prepare($sql);
$query->bindValue(':Pays', $_POST['Pays'], PDO::PARAM_STR);
$query->bindValue(':Marque', $_POST['Marque'], PDO::PARAM_STR);
$query->bindValue(':Models', $_POST['Models'], PDO::PARAM_INT);
$query->bindValue(':Année', $_POST['Année'], PDO::PARAM_INT);
$query->bindValue(':Puissance_en_ch', $_POST['Puissance_en_ch'], PDO::PARAM_STR);
$query->bindValue(':Couple', $_POST['Couple'], PDO::PARAM_STR);
$query->bindValue(':Type', $_POST['Type'], PDO::PARAM_STR);
$query->bindValue(':Poids_en_kg', $_POST['Poids_en_kg'], PDO::PARAM_STR);
$query->execute();
$_SESSION['creation'] = '<span style="color: green;">'.'La '.$_POST['Marque'].' '.$_POST['Models'].' de '.$_POST['Année'].' Vient d\'être ajouté à mon garage !'.'</span>';
header('Location: read.php');
}else{
$_SESSION['erreur'] = '<span style="color: red;">'."Le formulaire est incomplet".'</span>';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajouter une voiture </title>
</head>
<body>
    <div class="row">
            <section class="col-12">
                <?php
                    if(!empty($_SESSION['erreur'])){
                        echo '<div class="alert alert-danger" role="alert">
                                '. $_SESSION['erreur'].'
                            </div>';
                        $_SESSION['erreur'] = "";
                    }
                ?>
            <h2>Ajouter une voiture à mon garage</h2>
                <form method="post" id="create_form">
                    <label for="Pays">Pays</label>
                    <input type="text" name="Pays" id="Pays"></br>
                    <label for="Marque">Marque</label>
                    <input type="text" name="Marque" id="Marque"></br>
                    <label for="Models">Modèle</label>
                    <input type="text" name="Models" id="Models"></br>
                    <label for="Année">Année</label>
                    <input type="number" name="Année" id="Année"></br>
                    <label for="Puissance_en_ch">Puissance en ch</label>
                    <input type="number" name="Puissance_en_ch" id="Puissance_en_ch"></br>
                    <label for="Couple">Couple en N.m</label>
                    <input type="number" name="Couple" id="Couple"></br>
                    <label for="Type">Type</label>
                    <input type="text" name="Type" id="Type"></br>
                    <label for="Poids en kg">Poids en kg</label>
                    <input type="number" name="Poids_en_kg" id="Poids_en_kg"></br>
                    <button>Enregistrer</button>
                    <p><a class="btn-retour" href="read.php">Retour</a></p>
                </form>
            </section>
                </div>

</body>
</html>
<?php
//TODO: Créer le formulaire HTML
//TODO: Si formulaire soumi, alors faire la requete d'insertion
//TODO: Bonus : Gérer les erreurs / Le typages des champs / Messages de succès / Message d'Echec / Redirection
?>