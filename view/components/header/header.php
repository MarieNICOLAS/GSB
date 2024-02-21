<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/components/header/header.css">
    <link rel="stylesheet" href="/template/style.css">
    <link rel="stylesheet" href="/view/components/footer/footer.css">
    <title><?php echo $title;?></title>
</head>
<body>
<header>
    <nav>
        <a href="/accueil">Accueil</a>
        <a href="/connexion">Connexion</a>
        <a href="/monCompte">Mon compte</a>
        <?php if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in']): ?>
            <a href="/traitement-deconnexion">Déconnexion</a>
        <?php endif; ?>
    </nav>
</header>
