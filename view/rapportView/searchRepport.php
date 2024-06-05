<?php 

$title = "Rechercher un rapport | GSB";?>

<form action="/traitement_recherche_rapport" method="POST">
        <label for="date_rapport">Date du Rapport :</label>
        <input type="date" id="date_rapport" name="date_rapport" required>
        <button type="submit">Rechercher</button>
</form>
