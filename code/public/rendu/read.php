<?php
include 'config.ini.php';

// // Connexion à la base de données
// $conn = mysqli_connect(HOTE, USERNAME, MDP, BASE);

// // Vérifier la connexion
// if (!$conn) {
//     die("La connexion a échoué : " . mysqli_connect_error());
// }

// // Préparation et exécution de la requête SQL
// $sql = "SELECT * FROM Voitures";
// $result = $conn->query($sql);

// // Fermer la connexion
// mysqli_close($conn);


//TODO : Faire la requete Select pour avoir les bonnes données
//TODO : Faire le HTML avec  la boucle d'affichage des données

?>

<?php
$conn = mysqli_connect(HOTE, USERNAME, MDP, BASE);

// Vérification de la connexion
if (!$conn) {
    die("Connexion échouée: " . mysqli_connect_error());
}

// Récupération des données de la table
$sql = "SELECT * FROM Voitures";
$result = mysqli_query($conn, $sql);

// Affichage des données dans un tableau HTML/CSS
echo "<table>";
echo "<thead>";
echo "<tr>";
// Boucle pour afficher les noms des colonnes
while ($field = mysqli_fetch_field_direct($result, 0)) {
    echo "<th>" . $field->name . "</th>";
}
echo "</tr>";
echo "</thead>";
echo "<tbody>";
// Boucle pour afficher les données de chaque ligne
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

// Fermeture de la connexion
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendu - CRUD</title>
    <link rel="stylesheet" href="../rendu/style.css">
</head>
<body>
    <h1>Je suis connecté !!!</h1>
</body>
</html>