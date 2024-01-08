<?php require 'view/header/header.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Gestion de visites médicales</title>
</head>
<body>
    <h1>Connexion</h1>

    <form action="/traitement-connexion" method="post"> <!-- Assurez-vous que cette action correspond à une route dans votre routeur -->
        <label for="login">Login :</label>
        <input type="email" id="login" name="login" required>
        <br>
        <label for="motDePasse">Mot de passe :</label>
        <input type="password" id="motDePasse" name="motDePasse" required>
        <br>
        <button type="submit">Connexion</button>
    </form>

    <p>Vous n'avez pas de compte ? <a href="/inscription-visiteur">Inscrivez-vous ici</a>.</p>
</body>
</html>
