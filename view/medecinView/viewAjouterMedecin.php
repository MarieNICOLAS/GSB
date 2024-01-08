<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter médecin</title>
</head>
<body>
    <!-- require header -->

    <h1>Ajouter médecin</h1>

    <form action="" method="post">
        
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <br>
        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" required>
        <br>
        <label for="telephone">Téléphone :</label>
        <input type="text" id="telephone" name="telephone" required>
        <br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="specialiteComplementaire">Spécialité :</label>
        <input type="text" id="specialiteComplementaire" name="specialiteComplementaire" required>
        <br>
        <label for="departement">Département :</label>
        <input type="text" id="departement" name="departement" required>
        <br>
        <button type="submit">S'inscrire</button>
        
    </form>
    <button type="submit">Annuler</button>


    <!-- require footer -->
</form>
</body>
</html>


