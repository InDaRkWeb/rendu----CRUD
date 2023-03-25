<?php
require_once 'fonction.ini.php';
$connexion = connexion();

$sql = 'INSERT INTO `Voitures` (`Pays`, `Marque`, `Models`, `Annee`, `Puissance`, `Couple`, `Poids`) VALUES (:Pays, :Marque, :Models, :Annee, :Puissance, :Couple, :Poids);';
$query = $connexion->prepare($sql);

if(isset($_POST)){
if(isset($_POST['Pays']) && !empty($_POST['Pays'])
    && isset($_POST['Marque']) && !empty($_POST['Marque'])
    && isset($_POST['Models']) && !empty($_POST['Models'])
    && isset($_POST['Annee']) && !empty($_POST['Annee'])
    && isset($_POST['Puissance']) && !empty($_POST['Puissance'])
    && isset($_POST['Couple']) && !empty($_POST['Couple'])
    && isset($_POST['Poids']) && !empty($_POST['Poids'])){
        $Pays = strip_tags($_POST['Pays']);
        $Marque = strip_tags($_POST['Marque']);
        $Models = strip_tags($_POST['Models']);
        $Annee = strip_tags($_POST['Annee']);
        $Puissance = strip_tags($_POST['Puissance']);
        $Couple = strip_tags($_POST['Couple']);
        $Poids = strip_tags($_POST['Poids']);
        $query->bindValue(':Pays', $_POST['Pays'], PDO::PARAM_STR);
        $query->bindValue(':Marque', $_POST['Marque'], PDO::PARAM_STR);
        $query->bindValue(':Models', $_POST['Models'], PDO::PARAM_STR);
        $query->bindValue(':Annee', $_POST['Annee'], PDO::PARAM_INT);
        $query->bindValue(':Puissance', $_POST['Puissance'], PDO::PARAM_INT);
        $query->bindValue(':Couple', $_POST['Couple'], PDO::PARAM_INT);
        $query->bindValue(':Poids', $_POST['Poids'], PDO::PARAM_INT);
        $query->execute();
header('Location: read.php');}}
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
        <section class="col-12" class="create">
            <h2>Ajouter une voiture à mon garage</h2>
            <form method="post" id="create_form">
                <label for="Pays">Pays</label>
                <input type="text" name="Pays" id="Pays"></br>
                <label for="Marque">Marque</label>
                <input type="text" name="Marque" id="Marque"></br>
                <label for="Models">Modèle</label>
                <input type="text" name="Models" id="Models"></br>
                <label for="Annee">Année</label>
                <input type="number" name="Annee" id="Annee"></br>
                <label for="Puissance">Puissance en ch</label>
                <input type="number" name="Puissance" id="Puissance"></br>
                <label for="Couple">Couple en N.m</label>
                <input type="number" name="Couple" id="Couple"></br>
                <label for="Poids">Poids en kg</label>
                <input type="number" name="Poids" id="Poids"></br>
                <button>Enregistrer</button><p><a class="btn-retour" href="read.php">Retour</a></p>
                
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