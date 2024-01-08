<?php require 'view/header/header.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Gestion de visites médicales</title>
    <style>
        /* Ajoutez ici vos styles CSS */
        .button-link {
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin: 5px;
            text-align: center;
        }
        .button-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Accueil</h1>

    <a href="/inscription-visiteur" class="button-link">Inscription</a>
    <a href="/connexion" class="button-link">Connexion</a>

</body>
</html>
