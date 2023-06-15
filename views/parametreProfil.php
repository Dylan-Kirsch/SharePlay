<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href=".\assets\css\parametre.css">

    <title>Parametre profil</title>
</head>
<body>


    <div id="paraProfil">
        <img src="assets/images/photo-profil.jpg" alt="photo de profil">

        <p><?=$_SESSION['prenom']?> <?=$_SESSION['nom']?></p>

    </div>

</body>
</html>