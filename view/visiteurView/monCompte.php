<?php require 'view/header/header.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
</head>
<body>
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
