<?php 
require_once 'fonction.ini.php';
$connexion = connexion();

if(isset($_POST)){
    if(isset($_POST['id']) && !empty($_POST['id'])
        && isset($_POST['Pays']) && !empty($_POST['Pays'])
        && isset($_POST['Marque']) && !empty($_POST['Marque'])
        && isset($_POST['Models']) && !empty($_POST['Models'])
        && isset($_POST['Annee']) && !empty($_POST['Annee'])
        && isset($_POST['Puissance']) && !empty($_POST['Puissance'])
        && isset($_POST['Couple']) && !empty($_POST['Couple'])
        && isset($_POST['Poids']) && !empty($_POST['Poids'])){
        $id = $_GET['id'];
        $Pays = $_POST['Pays'];
        $Marque = $_POST['Marque'];
        $Modele = $_POST['Models'];
        $Annee = $_POST['Annee'];
        $Puissance = $_POST['Puissance'];
        $Couple = $_POST['Couple'];
        $Poids = $_POST['Poids'];

        $sql = "UPDATE `Voitures` SET `Pays`=:Pays, `Marque`=:Marque, `Models`=:Modele, `Annee`=:Annee, `Puissance`=:Puissance, `Couple`=:Couple, `Poids`=:Poids WHERE `id`=:id;";

        $query = $connexion->prepare($sql);

        $query->bindValue(':Pays', $Pays, PDO::PARAM_STR);
        $query->bindValue(':Marque', $Marque, PDO::PARAM_STR);
        $query->bindValue(':Modele', $Modele, PDO::PARAM_STR);
        $query->bindValue(':Annee', $Annee, PDO::PARAM_INT);
        $query->bindValue(':Puissance', $Puissance, PDO::PARAM_INT);
        $query->bindValue(':Couple', $Couple, PDO::PARAM_INT);
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
            <label for="Pays">Pays</label>
            <input type="text" name="Pays" id="Pays" value="<?= $Voitures['Pays'] ?>">
        </p>
        <p>
            <label for="Marque">Marque</label>
            <input type="text" name="Marque" id="Marque" value="<?= $Voitures['Marque'] ?>">
        </p>
        <p>
            <label for="Models">Models</label>
            <input type="text" name="Models" id="Models" value="<?= $Voitures['Models'] ?>">
        </p>
        <p>
            <label for="Annee">Année</label>
            <input type="number" name="Annee" id="Annee" value="<?= $Voitures['Annee'] ?>">
        </p>
        <p>
            <label for="Puissance">Puissance en ch</label>
            <input type="number" name="Puissance" id="Puissance" value="<?= $Voitures['Puissance'] ?>">
        </p>
        <p>
            <label for="Couple">Couple</label>
            <input type="text" name="Couple" id="Couple" value="<?= $Voitures['Couple'] ?>">
        </p>
        <p>
            <label for="Poids">Poids en kg</label>
            <input type="text" name="Poids" id="Poids" value="<?= $Voitures['Poids'] ?>">
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