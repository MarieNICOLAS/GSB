<?php $title = 'Connexion Visiteur | GSB';?>
<h1>Connexion</h1>

<form action="/traitement-connexion" method="post">
    <div>
        <label for="login">Login :</label>
        <input type="email" id="login" name="login" required>
    </div>
    <div>
        <label for="motDePasse">Mot de passe :</label>
        <input type="password" id="motDePasse" name="motDePasse" required>
    </div>
    <button type="submit">Connexion</button>
</form>

<p>Vous n\'avez pas de compte ? <a href="/inscription-visiteur">Inscrivez-vous ici</a>.</p>

