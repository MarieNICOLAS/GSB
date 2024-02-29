<?php $title = "Ajouter un médecin | GSB"; ?>

<form action="/traitement-inscription-medecin" method="post">
    
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
<form action="/monCompte"><button type="submit">Annuler</button></form>


