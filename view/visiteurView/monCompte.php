<?php require 'view/header/header.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
    <style>
        /* Ajoutez ici votre CSS */
        body {
            font-family: Arial, sans-serif;
        }
        .menu {
            display: flex;
            justify-content: space-around;
            background-color: #f0f0f0;
            padding: 10px;
        }
        .menu a {
            text-decoration: none;
            color: #000;
        }
        .content {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }
        .content div {
            padding: 10px;
            border: 1px solid #000;
        }
        .content div:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <!-- <div class="menu">
        <a href="/">Accueil</a>
        <a href="/connexion">Connexion</a>
        <a href="/monCompte">Mon compte</a>
    </div> -->
    <h1>Mon compte</h1>
    <div class="content">
        <div class="medecins">
            <h2>Médecins</h2>
            <p><a href="/ajouterMedecin">Ajouter un médecin</a></p>
            <p><a href="/rechercherMedecin">Rechercher médecin</a></p>
            <p><a href="/tousLesMedecins">Tous les médecins</a></p>
        </div>
        <div class="rapports">
            <h2>Rapports</h2>
            <p><a href="/creerRapport">Créer un rapport</a></p>
            <p><a href="/rechercherRapport">Rechercher un rapport</a></p>
            <p><a href="/modifierRapport">Modifier un rapport</a></p>
        </div>
    </div>
</body>
</html>
