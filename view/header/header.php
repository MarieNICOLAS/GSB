<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Gestion de Visites Médicales</title>
    <style>
        /* Styles de base pour l'en-tête et les boutons */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        header {
            background-color: #003366; /* Bleu foncé */
            color: white;
            width: 100%;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 5px 15px;
        }
        .content {
            margin-top: 50px;
            text-align: center;
        }
        .button {
            background-color: #007bff; /* Bleu */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #0056b3; /* Bleu plus foncé */
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="/accueil">Accueil</a>
            <a href="/connexion">Connexion</a>
            <a href="/monCompte">Mon compte</a>
        </nav>
    </header>
