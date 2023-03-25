<?php 
session_start();
require_once 'fonction.ini.php';
$connexion = connexion();

if(isset($_POST)){
    if(isset($_POST['id']) && !empty($_POST['id'])
        && isset($_POST['Pays']) && !empty($_POST['Pays'])
        && isset($_POST['Marque']) && !empty($_POST['Marque'])
        && isset($_POST['Models']) && !empty($_POST['Models'])
        && isset($_POST['Année']) && !empty($_POST['Année'])
        && isset($_POST['Puissance_en_ch']) && !empty($_POST['Puissance_en_ch'])
        && isset($_POST['Couple']) && !empty($_POST['Couple'])
        && isset($_POST['Type']) && !empty($_POST['Type'])
        && isset($_POST['Poids_en_kg']) && !empty($_POST['Poids_en_kg'])){
        $id = $_GET['id'];
        $Pays = $_POST['Pays'];
        $Marque = $_POST['Marque'];
        $Modele = $_POST['Models'];
        $Annee = $_POST['Année'];
        $Puissance = $_POST['Puissance_en_ch'];
        $Couple = $_POST['Couple'];
        $Type = $_POST['Type'];
        $Poids = $_POST['Poids_en_kg'];


        $sql = "UPDATE `Voitures` SET `Pays`=:Pays, `Marque`=:Marque, `Models`=:Modele, `Année`=:Annee, `Puissance_en_ch`=:Puissance, `Couple`=:Couple, `Type`=:Type, `Poids_en_kg`=:Poids WHERE `id`=:id;";

        $query = $connexion->prepare($sql);

        $query->bindValue(':Pays', $Pays, PDO::PARAM_STR);
        $query->bindValue(':Marque', $Marque, PDO::PARAM_STR);
        $query->bindValue(':Modele', $Modele, PDO::PARAM_STR);
        $query->bindValue(':Annee', $Annee, PDO::PARAM_INT);
        $query->bindValue(':Puissance', $Puissance, PDO::PARAM_INT);
        $query->bindValue(':Couple', $Couple, PDO::PARAM_INT);
        $query->bindValue(':Type', $Type, PDO::PARAM_STR);
        $query->bindValue(':Poids', $Poids, PDO::PARAM_INT);
        $query->bindValue(':id', $id, PDO::PARAM_INT);

$query->execute();
header('Location: read.php');
    }
}

if(isset($_GET['id']) && !empty($_GET['id'])){
$id = strip_tags($_GET['id']);
$sql = "SELECT * FROM `Voitures` WHERE `id`=:id;";

$query = $connexion->prepare($sql);

$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->execute();

$Voitures = $query->fetch();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modifier une Voitures</title>
</head>
<body>
<h2>Modifier les informations de la <?= $Voitures['Marque'] ?> <?= $Voitures['Models'] ?> </h2>

    <form method="post" id="update_form">
        <p>
            <label for="modele">Modèle</label>
            <input type="text" name="modele" id="modele" value="<?= $Voitures['Pays'] ?>">
        </p>
        <p>
            <label for="modele">Modèle</label>
            <input type="text" name="modele" id="modele" value="<?= $Voitures['Marque'] ?>">
        </p>
        <p>
            <label for="marque">Marque</label>
            <input type="text" name="marque" id="marque" value="<?= $Voitures['Models'] ?>">
        </p>
        <p>
            <label for="annee">Année</label>
            <input type="number" name="annee" id="annee" value="<?= $Voitures['Année'] ?>">
        </p>
        <p>
            <label for="puissance">Puissance</label>
            <input type="number" name="puissance" id="puissance" value="<?= $Voitures['Puissance_en_ch'] ?>">
        </p>
        <p>
            <label for="modele">Modèle</label>
            <input type="text" name="modele" id="modele" value="<?= $Voitures['Couple'] ?>">
        </p>
        <p>
            <label for="modele">Modèle</label>
            <input type="text" name="modele" id="modele" value="<?= $Voitures['Type'] ?>">
        </p>
        <p>
            <label for="modele">Modèle</label>
            <input type="text" name="modele" id="modele" value="<?= $Voitures['Poids_en_kg'] ?>">
        </p>
        <div class="buttonParam">     
           <p><a class="btn-retour" href="read.php">Retour</a></p>
        <input type="hidden" name="id" value="<?= $voiture['id'] ?>">
                <button>Enregistrer</button>
            </p>
        </div>
    </form>
</body>
</html>

<?php
//Todo : Récupérer l'id depuis l'url
//TODO : Remplir le forumaire HTML avec les valeur récupérées depuis la requete correspondante
//TODO: Penser a mettre un input hidden pour l'ID
//TODO: mettre a jour le contenu avec une requete correspondante. 
//TODO: Bonus : Gérer les erreurs / Le typages des champs / Messages de succès / Message d'Echec / Redirection
?>