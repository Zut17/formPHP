<?php
$nom      = $_POST['nom'] ?? '';
$prenom   = $_POST['prenom'] ?? '';
$age      = $_POST['age'] ?? '';
$sexe     = $_POST['sexe'] ?? '';
$matieres = $_POST['matieres'] ?? [];
$note     = $_POST['note'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Informations enregistrées : </h1>
    <div class="containerInfo">
        <p>Nom : <?= $nom ?></p>
        <p>Prénom : <?= $prenom ?></p>
        <p>Sexe : <?= $sexe ?></p>
        <p>Âge : <?= $age ?></p>
        <p>Matières choisies :</p>
        <ul>
            <?php foreach ($matieres as $matiere) { ?>
                <li><?= $matiere ?></li>
            <?php } ?>
        </ul>
        <?php if ($note !== '') { ?>
            <p>Note : <?= $note ?></p>
        <?php } ?>
    </div>
    <button><a href="index.html">Retour</a></button>
</body>
</html>